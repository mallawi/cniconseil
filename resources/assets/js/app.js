(function() {
    "use strict";

    // constructor function for XMLHttpRequest that return a promise
    function XHRequest() {
        function ajaxReq(method, url) {
            var promise = new Promise( function (resolve, reject) {
                var xhr = new XMLHttpRequest();

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


    function formsHandler() {
        var formsItem = document.getElementsByClassName("forms--item");
        var currentFormRef;
        var oldFormRef;


        function makeChanges(data) {
            var requestedData = data;
            var formHolder = document.getElementById("form--container");
            var requestedForm = requestedData.getElementById("form--wrap");
            var oldForm;

            if (formHolder.classList.contains("form--shown")) {
                // checking if form is the same then remove
                if (currentFormRef.classList.contains("forms--item-current")) {
                    oldForm = document.getElementById("form--wrap");
                    formHolder.removeChild(oldForm);
                    formHolder.classList.remove("form--shown");
                    currentFormRef.classList.remove("forms--item-current");
                    console.log("removed");
                } else { // if not the same form replace it
                    oldForm = document.getElementById("form--wrap");
                    formHolder.replaceChild(requestedForm, oldForm);
                    currentFormRef.classList.add("forms--item-current");
                    oldFormRef.classList.remove("forms--item-current");
                    oldFormRef = currentFormRef;
                    console.log("replaced");
                }
            } else { // if no form shown add
                formHolder.classList.add("form--shown");
                currentFormRef.classList.add("forms--item-current");

                formHolder.appendChild(requestedForm);
                oldFormRef = currentFormRef;
                
                console.log("added"); 
            }
        }

        var responseHandler = {
            success: function(data) {
                makeChanges(data);
            },
            failed: function(status) {
                console.log(status);
            }
        }

         function getForms(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            currentFormRef = this;

            var typeAttr = this.getAttribute("data-type");

            var url = "/form/" + typeAttr;

            var xhrequest = new XHRequest();

            xhrequest.get(url).then(responseHandler.success).catch(responseHandler.failed);
        }

        for (var i = 0; i < formsItem.length; i++) {
            formsItem[i].addEventListener("click", getForms);
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
            formsHandler();
            sliderHandler();
        }
    }

}());
