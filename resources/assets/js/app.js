
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

    function formsHandler() {
        var formsItem = document.getElementsByClassName("forms--item");
        var acForm = document.getElementById("form--item-acheter");

        function ajaxReq(url) {
            var promise = new Promise( function (resolve, reject) {
                var xhr = new XMLHttpRequest();

                xhr.open("GET", url);
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

        var ajaxCb = {
            success: function(data) {
                console.log(data);
            },
            failed: function(status) {

            }
        }
        
        function getForms(ev) {
            ev.preventDefault();
            ev.stopPropagation();

            console.log(ev);
            console.log(acForm.getAttribute("data-type"));
            var typeAttr = acForm.getAttribute("data-type");

            var url = "/form/" + typeAttr;

            ajaxReq(url).then(ajaxCb.success).catch(ajaxCb.failed);
        }

        for (var i = 0; i < formsItem.length; i++) {
            formsItem[i].addEventListener("click", getForms);
            // console.log(formsItem[i]);
        }
    }
    


    document.onreadystatechange = function() {
        if (document.readyState === "complete") {
            init();
            navHandler();
            formsHandler();
        }
    }




}());
