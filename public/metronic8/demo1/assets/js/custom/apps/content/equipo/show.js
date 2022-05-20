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



        
    // The DOM elements you wish to replace with Tagify
    var input = document.querySelector("#dispositivos");
    new Tagify(input, {
        whitelist: ["Teclado", "Monitor", "Mouse", "Cable VGA", "cable HDMI", "cable USB", "Cable de red", "Adaptador wifi", "Adaptador ethernet", "Rodillo"],
        maxTags: 10,
        dropdown: {
            maxItems: 20,           // <- mixumum allowed rendered suggestions
            classname: "", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
    });





        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            _form,
            {
                fields: {
                    inventario: {
                        validators: {
                            notEmpty: {
                                message: 'El inventario del equipo es requerido'
                            }
                        }
                    },
                    departamento: {
                        validators: {
                            notEmpty: {
                                message: ' El departamento del equipo es requerido'
                            }
                        }
                    },
                    marca: {
                        validators: {
                            notEmpty: {
                                message: ' La marca del equipo es requerida'
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
