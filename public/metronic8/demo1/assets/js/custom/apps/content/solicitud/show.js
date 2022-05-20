"use strict";

// Class definition
var KTProjectSettings = function () {

    // Private functions
    var handleForm = function () {
        // Init Datepicker --- For more info, please check Flatpickr's official documentation: https://flatpickr.js.org/
        $("#kt_datepicker_1").flatpickr();

        // Form validation
        var validation;
        var _form = document.getElementById('kt_project_settings_form');
        var submitButton = _form.querySelector('#kt_project_settings_submit');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            _form,
            {
                fields: {
                    identificador: {
                        validators: {
                            notEmpty: {
                                message: 'El identificador del equipo es requerido'
                            }
                        }
                    },
                    equipo_id: {
                        validators: {
                            notEmpty: {
                                message: ' El departamento del equipo es requerido'
                            }
                        }
                    },
                    observacion: {
                        validators: {
                            notEmpty: {
                                message: ' La observacion del equipo es requerida'
                            }
                        }
                    },
                    tipo: {
                        validators: {
                            notEmpty: {
                                message: ' El tipo de equipo es requerido'
                            }
                        }
                    },
                    estatus: {
                        validators: {
                            notEmpty: {
                                message: ' El estatus de equipo es requerido'
                            }
                        }
                    }
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
