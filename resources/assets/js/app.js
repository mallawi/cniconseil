(function() {
    "use strict";

    // constructor function for XMLHttpRequest that return a promise
    function XHRequest(progress) {

        var pCb = progress;

        function ajaxReq(method, url, data) {
            var promise = new Promise( function (resolve, reject) {
                var xhr = new XMLHttpRequest();

                if (pCb) {
                    xhr.addEventListener("progress", pCb.progress);
                    xhr.addEventListener("load", pCb.load);
                }

                if (method === "GET") {
                    xhr.responseType = "document";
                }
                    
                xhr.open(method, url);

                if (data)
                    xhr.send(data);  
                else
                    xhr.send();

                xhr.onreadystatechange = function() {
                    if (this.readyState === 4) {
                        if (this.status === 200) {
                            resolve(this.response);
                        } else {
                            reject(this.status);
                        }
                    } else {
                        
                    }
                }
            });

            return promise;
        }

        return {
            get: function(url) {
                return ajaxReq("GET", url);
            },
            post: function(url, data) {
                if (data) { return ajaxReq("POST", url, data); }
                return ajaxReq("POST", url);
            }
        }

    }

    var formsHandler;

    function FormsHandler() { // constructor function for forms handling

        return {
            init: function() {
                formsGetHandler();
            },
            makeChanges: function(data) {
                var requestedData = data;
                var formHolder = document.getElementById("form--container");
                var requestedForm = requestedData.getElementById("form--wrap");

                if (formHolder.classList.contains("form--shown")) { // replace the form if other shown
                    // this.handle.replace(formHolder, requestedForm);
                    var oldForm = document.getElementById("form--wrap");
                    formHolder.replaceChild(requestedForm, oldForm);
                    this.formRef.current.classList.add("forms--item-current");
                    this.formRef.old.classList.remove("forms--item-current");
                    this.formRef.old = this.formRef.current;

                    this.handle.listen();
                    console.log("replaced");
                } else { // if no form shown add
                    formHolder.classList.add("form--shown");
                    this.formRef.current.classList.add("forms--item-current");
                    formHolder.appendChild(requestedForm);
                    this.formRef.old = this.formRef.current;
            
                    this.handle.listen();

                    console.log("added");
                }
            },
            formRef: { // forms references, current for requested, and old for the last
                old: null,
                current: null
            },
            handle: { // listening for form submition and handling it
                listen: function() {
                    var formEl =  document.forms[0];
                    
                    formEl.addEventListener("submit", function(ev) {
                        ev.preventDefault();

                        formsPostHandler(formEl); // sending the form to be posted to server
                        return false;
                    });

                    formEl.addEventListener("reset", function(ev) {
                        formsHandler.handle.remove();
                        return;
                    });
                },
                remove: function() {
                    var oldForm = document.getElementById("form--wrap");
                    var formHolder = document.getElementById("form--container");
                    formHolder.removeChild(oldForm);
                    formHolder.classList.remove("form--shown");
                    formsHandler.formRef.old.classList.remove("forms--item-current");
                }
            }
        }
    }


    function formsGetHandler() {
        var formsItem = document.getElementsByClassName("forms--item");
        var currentFormRef;

        var responseHandler = {
            success: function(data) {
                formsHandler.makeChanges(data);
            },
            failed: function(status) {
                console.log(status);
            }
        }

        var progressCb = {
            progress: function(ev) {
                currentFormRef.classList.add("form--item-progress");
            },
            load: function(ev) {
                currentFormRef.classList.remove("form--item-progress");
            }
        }

        function getForms(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            currentFormRef = this;
            formsHandler.formRef.current = this;

            var typeAttr = this.getAttribute("data-type");

            if (this.classList.contains("forms--item-current")) {
                 if (formsHandler.formRef.old && this === formsHandler.formRef.old) {
                    formsHandler.handle.remove();
                    return;
                }
            }

            var url = "/form/" + typeAttr;

            var xhrequest = new XHRequest(progressCb);

            xhrequest.get(url).then(responseHandler.success).catch(responseHandler.failed);
        }

        for (var i = 0; i < formsItem.length; i++) {
            formsItem[i].addEventListener("click", getForms);
        }
    }


    function formsPostHandler(formEl) {
        var formData = new FormData(formEl);

        for (var eItem = 0; eItem < formEl.elements.length; eItem++) {
            if (formEl.elements[eItem].tagName.toUpperCase() === "BUTTON") { continue; }
            if (!formEl.elements[eItem].required && !formEl.elements[eItem].value) {
                formData.set(formEl.elements[eItem].name, 11111);
            }
        }

        var formAction = formEl.getAttribute("data-action");

        var progressCb = {
            progress: function(ev) {

            },
            load: function(ev) {
                // console.log(ev);
            }
        }

        var responseHandler = {
            success: function(data) {
                formsHandler.handle.remove();

                var confirmMsg = document.getElementById("form--confirmation-message");
                confirmMsg.classList.add("message--shown");

                var msgTimeout = setTimeout(function() {
                    confirmMsg.classList.remove("message--shown");
                    clearTimeout(msgTimeout);
                }, 5000);

                console.log(data);
            },
            failed: function(status) {
                console.log(status);
            }
        }
        
        var xhrequest = new XHRequest(progressCb);
        xhrequest.post(formAction, formData).then(responseHandler.success).catch(responseHandler.failed);
    }



    // var sliderHandler;
    // function handler for handling sliders
    function Slider(cls) {
        var cls = cls;
        var itemInterval = null;
        this.currentIdx = null;
        var self = this;

        this.stopInterval = function() {
            clearInterval(this.itemInterval);
        }

        // making changes to the slider
        this.changeSliderItem = function(current, item, cls) {
            current.classList.remove(cls);
            item.classList.add(cls);
            this.currentIdx = item;
        }

        this.intervalSliderItem = function(items, currentItem) {
            self.currentIdx = currentItem;
            this.itemInterval = setInterval(function() {
                if (self.currentIdx) {
                    for (var idx = 0; idx < items.length; idx++) {
                        if (self.currentIdx === items[idx]) {
                            var item = idx - 1;
                            if (idx - 1 < 0) {
                                var item = items.length - 1;
                            }
                            self.changeSliderItem(self.currentIdx, items[item], cls);
                            break;
                        }
                    }
                }
            }, 3000);
        }
    }


    function slideAnnonceMain() {
        var sliderBtns = document.getElementsByClassName("slider--btn");
        var sliderItems = document.getElementsByClassName("slider--item");

        var sliderHandler = new Slider("slider--item-current");

        if (!sliderBtns.length || !sliderItems.length) { return; }
        var prevBtn;
        var nextBtn;
        
        // handler for btns and slider items
        var btnsAction = {
            previous: function(btn) {
                if (nextBtn && nextBtn.disabled === true) {
                    nextBtn.disabled = false;
                }

                for (var idx = 0; idx < sliderItems.length; idx++) {
                    if (sliderItems[idx].classList.contains("slider--item-current")) {
                        if (idx + 1 === sliderItems.length ) {
                            btn.disabled = true;
                            return;
                        }

                        var item = idx + 1;

                        sliderHandler.changeSliderItem(sliderItems[idx], sliderItems[item], "slider--item-current");
                        break;
                    }
                }
            },
            next: function(btn) {
                if (prevBtn && prevBtn.disabled === true) {
                    prevBtn.disabled = false;
                }

                for (var idx = 0; idx < sliderItems.length; idx++) {
                    if (sliderItems[idx].classList.contains("slider--item-current")) {
                        if (idx - 1 < 0 ) {
                            btn.disabled = true;
                            return;
                        } 

                        var item = idx - 1;

                        sliderHandler.changeSliderItem(sliderItems[idx], sliderItems[item], "slider--item-current");
                        break;
                    }
                }
            }
        }

        // event listener handler, determining the btn and calling the right action
        function btnsHandler(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            sliderHandler.stopInterval();

            switch(this.name) {
                case "previous--btn":
                    btnsAction.previous(this);
                    prevBtn = this;
                    break;
                case "next--btn":
                    btnsAction.next(this);
                    nextBtn = this;
                    break;
            }

        }

        // loops to add event listeners to btns and iterating over slider items
        for (var i = 0; i < sliderBtns.length; i++) {
            sliderBtns[i].addEventListener("click", btnsHandler);
        }

        for (var idx = 0; idx < sliderItems.length; idx++) {
            if (idx === sliderItems.length - 1) {
                sliderItems[idx].classList.add("slider--item-current");
                sliderHandler.intervalSliderItem(sliderItems, sliderItems[idx]);
                break;
            }
        }
        
    }


    function slideAnnoncesFig() {
        var annoncesCell = document.getElementsByClassName("annonces--grid-cell");
        var annoncesCellRef = {};
        if (!annoncesCell) return;

        var sliderHandler;

        for (var i = 0; i < annoncesCell.length; i++) {
            var cellChildren = annoncesCell[i].children;
            var cell = annoncesCell[i];
            annoncesCellRef[cell] = [];

            sliderHandler = new Slider("annonces--fig-current");

            for (var ix = 0; ix < cellChildren.length; ix++) {

                if (cellChildren[ix].tagName === "FIGURE") {
                    annoncesCellRef[cell][ix] = cellChildren.item(ix);

                    if (ix === 0) {
                        cellChildren.item(ix).classList.add("annonces--fig-current");
                        sliderHandler.intervalSliderItem(annoncesCellRef[cell], cellChildren.item(ix));
                    }
                }
            }
            console.log(sliderHandler);
        }
    }

    function handleAnnonceGallery() {
        var gallery = document.getElementsByClassName("annonce--gallery-wrap")[0];
        // var item = document.getElementsByClassName("annonce--grid-item")[0];
        // var items = document.getElementsByClassName("annonce--grid-items");

        console.log(gallery);

        // if (!gallery) return;

        console.log(gallery);
    } 


    function init() {
        console.log("document ready!");
    }


    function navHandler() {
        var hamBtn = document.getElementById("ham--button");
        var nav = document.getElementById("main--nav");

        hamBtn.addEventListener("click", function(ev) {
            ev.preventDefault();

           if (!nav.classList.contains("nav--shown")) {
                nav.classList.add("nav--shown");
           } else {
               nav.classList.remove("nav--shown");
           }
        });
    } 

    document.onreadystatechange = function() {
        if (document.readyState === "complete") {
            init();
            navHandler();
            formsHandler = new FormsHandler();
            formsHandler.init();          
            slideAnnonceMain();
            slideAnnoncesFig();
            handleAnnonceGallery();
        }
    }

}());
