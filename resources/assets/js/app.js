(function() {
    "use strict";

    // constructor function for XMLHttpRequest that return a promise
    function XHRequest(progress) {

        var pCb = progress;

        function ajaxReq(method, url) {
            var promise = new Promise( function (resolve, reject) {
                var xhr = new XMLHttpRequest();

                if (pCb) {
                    xhr.addEventListener("progress", pCb.progress);
                    xhr.addEventListener("load", pCb.load);
                }

                xhr.open(method, url);
                xhr.responseType = "document";
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
            post: function(url) {
                return ajaxReq("POST", url);
            }
        }

    }

    var formsHandler;

    function FormsHandler() {

        return {
            init: function() {
                formsGetHandler();
                // this.formHandler =  formsPostHandler;
            },
            makeChanges: function(data) {
                var requestedData = data;
                var formHolder = document.getElementById("form--container");
                var requestedForm = requestedData.getElementById("form--wrap");

                if (formHolder.classList.contains("form--shown")) {
                    // replace the form
                    var oldForm = document.getElementById("form--wrap");
                    formHolder.replaceChild(requestedForm, oldForm);
                    this.formRef.current.classList.add("forms--item-current");
                    this.formRef.old.classList.remove("forms--item-current");
                    this.formRef.old = this.formRef.current;
                    console.log("replaced");
                } else { // if no form shown add
                    formHolder.classList.add("form--shown");
                    this.formRef.current.classList.add("forms--item-current");
                    formHolder.appendChild(requestedForm);
                    this.formRef.old = this.formRef.current;
            
                    this.formHandler.listen(formHolder.getElementsByClassName("form--btn"));

                    console.log("added");
                }
            },
            formRef: {
                old: null,
                current: null
            },
            formHandler: {
                listen: function(formBtns) {
                    console.log(formBtns);
                    formBtns[0].addEventListener("submit", function() {
                        return false;
                    });

                    formBtns[1].addEventListener("submit", function() {
                        return false;
                    });
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
                    var oldForm = document.getElementById("form--wrap");
                    var formHolder = document.getElementById("form--container");
                    formHolder.removeChild(oldForm);
                    formHolder.classList.remove("form--shown");
                    currentFormRef.classList.remove("forms--item-current");
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


    var formsPostHandler = {
        init: function(formEl) {
            formEl.addEventListener("submit", function() {
                return false;
            });
        }
    }

    // function handler for handling slider from the index page
    function sliderHandler() {
        var sliderBtns = document.getElementsByClassName("slider--btn");
        var sliderItems = document.getElementsByClassName("slider--item");
        var prevBtn;
        var nextBtn;
        var itemIdx;
        var currentItem;

        // making changes to the slider
        function changeSliderItem(current, item) {
            current.classList.remove("slider--item-current");
            item.classList.add("slider--item-current");
            
        }
        
        // object for handling btns and slider items logicaly
        var sControl = {
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
                        changeSliderItem(sliderItems[idx], sliderItems[item]);
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
                        changeSliderItem(sliderItems[idx], sliderItems[item]);
                        break;
                    }
                }
            }
        }

        // event listener handler, determining the btn and calling the right action
        function sBtnHandler(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            switch(this.name) {
                case "previous--btn":
                    sControl.previous(this);
                    prevBtn = this;
                    break;
                case "next--btn":
                    sControl.next(this);
                    nextBtn = this;
                    break;
            }

        }


        // for loops to add event listeners to btns and iterating over slider items
        
        for (var i = 0; i < sliderBtns.length; i++) {
            sliderBtns[i].addEventListener("click", sBtnHandler);
        }

        for (var idx = 0; idx < sliderItems.length; idx++) {
            if (idx === sliderItems.length - 1) {
                sliderItems[idx].classList.add("slider--item-current");
            }
        }
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
            sliderHandler();
        }
    }

}());
