
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

        function makeChanges(data) {
            var requestedData = data;
            var contentHolder = document.getElementById("forms--wrapper");
            var form = requestedData.getElementById("form--wrap");
            console.log(form);
            contentHolder.appendChild(form);
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

            console.log(this);

            var typeAttr = this.getAttribute("data-type");
            var url = "/form/" + typeAttr;

            // var xhrequest = new XHRequest();

            // xhrequest.get(url).then(responseHandler.success).catch(responseHandler.failed);
        }

        for (var i = 0; i < formsItem.length; i++) {
            formsItem[i].addEventListener("click", getForms);
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
        }
    }

}());
