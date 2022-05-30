// Class definition
var KTProjectSettings = function () {

    // Private functions
    var handleForm = function () {

        // Form validation
        var validation;
        var _form = document.getElementById('register_form');
        var submitButton = _form.querySelector('#form_input');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            _form,
            {
                fields: {
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: 'El nombre del departamento es requerido'
                            }
                        }
                    },
                    identificador: {
                        validators: {
                            notEmpty: {
                                message: ' El identificador del departamento es requerido'
                            }
                        }
                    },
                    responsable: {
                        validators: {
                            notEmpty: {
                                message: ' El responsable del departamento es requerido'
                            }
                        }
                    },
                    cargo_responsable: {
                        validators: {
                            notEmpty: {
                                message: 'El cargo del responsable es requerido'
                            }
                        }
                    },
                    direccion: {
                        validators: {
                            notEmpty: {
                                message: 'La direccion es requerido'
                            }
                        }
                    },
                    telefono: {
                        validators: {
                            notEmpty: {
                                message: 'El telefono es requerido'
                            }
                        }
                    },
                    correo: {
                        validators: {
                            notEmpty: {
                                message: 'El correo es requerido'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'la contraseña   es requerido'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status == 'Valid') {

                    swal.fire({
                        text: "Excelente! los cambios se han guardado.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn fw-bold btn-light-primary"
                        }
                    });

                } else {
                    swal.fire({
                        text: "Se detectaron algunos errores, Intente nuevamente.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn fw-bold btn-light-primary"
                        }
                    });
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            handleForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTProjectSettings.init();
});