
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * include Vue and Vue Resource. This gives a great starting point for
//  * building robust, powerful web applications using Vue and Laravel.
//  */

// require('./bootstrap');

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

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
            var form = requestedData.getElementById("form--wrap");
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
                    formHolder.replaceChild(form, oldForm);
                    oldFormRef.classList.remove("forms--item-current");
                    currentFormRef.classList.add("forms--item-current");
                    console.log("replaced");
                }
            } else { // if no form shown add
                formHolder.classList.add("form--shown");
                currentFormRef.classList.add("forms--item-current");

                formHolder.appendChild(form);
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


    function sliderHandler() {
        var sliderBtns = document.getElementsByClassName("slider--btn");
        var sliderItems = document.getElementsByClassName("slider--item");
        var itemIndex;
        var currentItem;

        var sControl = {
            previous: function() {
                
            },
            next: function() {

            }
        }


        function sBtnHandler(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            switch(this.name) {
                case "previous--btn":
                    sControl.previous();
                    break;
                case "next--btn":
                    sCrontol.next();
                    break;
            }

        }

        for (var i = 0; i < sliderBtns.length; i++) {
            sliderBtns[i].addEventListener("click", sBtnHandler);
            // console.log(slide)
        }

        for (var ix = 0; ix < sliderItems.length; ix++) {
            console.log(sliderItems[ix]);
            // if (ix++ === sliderItems.length) {
            //     console.log(sliderItems[ix]);
            // }
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
