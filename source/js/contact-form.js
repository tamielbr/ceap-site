(function(root, factory) {
    'use strict';

    if (typeof define === 'function' && define.amd) {
        define([], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory();
    } else {
        root.ContactForm = factory();
    }
}(this, function() {
    'use strict';

    var ContactForm = function(target) {
        if (!this || !(this instanceof ContactForm)) {
            return new ContactForm(target);
        }

        this.form = target instanceof Node ? target : document.querySelector(target);

        if (this.form === null) {
            return;
        }

        this.init();
    };

    ContactForm.prototype = {
        hasClass: function(el, name) {
            return new RegExp('(\\s|^)' + name + '(\\s|$)').test(el.className);
        },
        addClass: function(el, name) {
            if (!this.hasClass(el, name)) {
                el.className += (el.className ? ' ' : '') + name;
            }
        },
        addError: function(el) {
            return this.addClass(el.parentNode, 'has-error');
        },
        removeClass: function(el, name) {
            if (this.hasClass(el, name)) {
                el.className = el.className.replace(new RegExp('(\\s|^)' + name + '(\\s|$)'), ' ').replace(/^\s+|\s+$/g, '');
            }
        },
        validate: function() {
            var elements = Array.prototype.slice.call(document.querySelectorAll('.form-control'));

            this.form.addEventListener('submit', function(e) {
                if (!event.target.checkValidity()) {
                    e.preventDefault();

                    elements.map(function(element) {
                        if (this.hasClass(element.parentNode, 'has-error')) {
                            this.removeClass(element.parentNode, 'has-error');
                            if (element.id == 'form-captcha-result') {
                                captchaErrorMessage = document.querySelector('#form-captcha-error');
                                // this.removeClass(captchaErrorMessage, 'has-error');
                                this.addClass(captchaErrorMessage, 'hidden-error');
                            }
                        }
                    }.bind(this));

                    var hasError = false,
                        name = document.querySelector('#form-name'),
                        email = document.querySelector('#form-email'),
                        subject = document.querySelector('#form-subject'),
                        message = document.querySelector('#form-message'),
                        firstNumber = document.querySelector('#form-first-number'),
                        secondNumber = document.querySelector('#form-second-number'),
                        captchaResult = document.querySelector('#form-captcha-result'),
                        captchaErrorMessage = document.querySelector('#form-captcha-error'),

                        // @from: https://html.spec.whatwg.org/multipage/forms.html#e-mail-state-(type=email)
                        testmail = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

                    if (name.value === '') {
                        hasError = true;
                        this.addError(name);
                    }

                    if (!testmail.test(email.value)) {
                        hasError = true;
                        this.addError(email);
                    }

                    if (subject.value === '') {
                        hasError = true;
                        this.addError(subject);
                    }

                    if (message.value === '') {
                        hasError = true;
                        this.addError(message);
                    }

                    if (captchaResult.value === '') {
                        hasError = true;
                        this.addError(captchaResult);
                    }

                    if (Number(captchaResult.value) != Number(firstNumber.value) + Number(secondNumber.value)) {
                        hasError = true;
                        this.addError(captchaResult);
                        // this.addClass(captchaErrorMessage, 'has-error');
                        this.removeClass(captchaErrorMessage, 'hidden-error');
                    }

                    if (hasError === false) {
                        this.form.submit();
                    }
                }
            }.bind(this), false);
        },
        init: function() {
            document.addEventListener('DOMContentLoaded', this.validate.bind(this), false);
        }
    };


    return ContactForm;
}));