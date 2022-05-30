"use strict";

// Class definition
var KTSignupGeneral = function () {
    // Elements
    var form = document.querySelector("#kt_sign_up_form");

    // Handle form
    var handleForm = () => {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(form, {
            fields: {
                'nombre': {
                    validators: {
                        notEmpty: {
                            message: "El nombre del departamento es requerido",
                        },
                    },
                },
                'identificador': {
                    validators: {
                        notEmpty: {
                            message:
                                "El identificador del departamento es requerido",
                        },
                    },
                },
                'responsable': {
                    validators: {
                        notEmpty: {
                            message:
                                "El responsable del departamento es requerido",
                        },
                    },
                },
                'cargo_responsable': {
                    validators: {
                        notEmpty: {
                            message: "El cargo del departamento es requerido",
                        },
                    },
                },
                'direccion': {
                    validators: {
                        notEmpty: {
                            message:
                                "El direccion del departamento es requerido",
                        },
                    },
                },
                'telefono': {
                    validators: {
                        notEmpty: {
                            message:
                                "El telefono del departamento es requerido",
                        },
                    },
                },
                'correo': {
                    validators: {
                        notEmpty: {
                            message: "La direccion de correo es requerida",
                        },
                        emailAddress: {
                            message: "El testo ingresado no es un correo",
                        },
                    },
                },
                'password': {
                    validators: {
                        notEmpty: {
                            message: "La contraseña es requerida",
                        }
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            },
        });

        // Handle form submit

        const submitButton = document.querySelector("#kt_sign_up_submit");
        submitButton.addEventListener("click", e => {
            e.preventDefault();

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == "Valid") {
                        // Show loading indication
                        submitButton.setAttribute("data-kt-indicator", "on");

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        // Simulate ajax request
                        setTimeout(function () {
                            // Hide loading indication
                            submitButton.removeAttribute("data-kt-indicator");

                            // Enable button
                            submitButton.disabled = false;

                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Su departamento se ha registrado correctamente",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            }).then(function (result) {
                                /*if (result.isConfirmed) { 
                                form.reset();  // reset form                    
                                passwordMeter.reset();  // reset password meter
                                form.submit();
                            }*/
                            });
                            form.submit();
                        }, 1500);
                    } else {
                        // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Disculpe, se han detectado algunos errores, intente nuevamente",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            }
        });

        
    }


    // Public functions
    return {
        // Initialization
        init: function () {
            handleForm();
        },
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});
