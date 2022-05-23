"use strict";

// Class definition
var solicitud_mantenimiento = function () {
    // Shared variables
    const element = document.getElementById('modal_mantenimiento_index');
    const form = element.querySelector('#form_mantenimiento_index');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddUser = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'identificador': {
                        validators: {
                            notEmpty: {
                                message: 'El identificador es requerido'
                            }
                        }
                    },
                    'equipo_id': {
                        validators: {
                            notEmpty: {
                                message: 'El equipo es requerido'
                            }
                        }
                    },
                    'departamento_id': {
                        validators: {
                            notEmpty: {
                                message: 'El departamento es requerido'
                            }
                        }
                    },
                    'observacion': {
                        validators: {
                            notEmpty: {
                                message: 'El observacion es requerido'
                            }
                        }
                    },
                    'tipo': {
                        validators: {
                            notEmpty: {
                                message: 'El tipo es requerido'
                            }
                        }
                    },
                    'estatus': {
                        validators: {
                            notEmpty: {
                                message: 'El estatus es requerido'
                            }
                        }
                    }
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click 
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation 
                            Swal.fire({
                                text: "Los datos del formulario han sido validados",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });
                            form.submit();
                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Rellene todos los datos, intente nuevamente",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initAddUser();
        }
    };
}();
// Class definition
var solicitud_baja = function () {
    // Shared variables
    const element = document.getElementById('modal_baja_index');
    const form = element.querySelector('#form_baja_index');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddUser = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'identificador': {
                        validators: {
                            notEmpty: {
                                message: 'El identificador es requerido'
                            }
                        }
                    },
                    'equipo_id': {
                        validators: {
                            notEmpty: {
                                message: 'El equipo es requerido'
                            }
                        }
                    },
                    'departamento_id': {
                        validators: {
                            notEmpty: {
                                message: 'El departamento es requerido'
                            }
                        }
                    },
                    'observacion': {
                        validators: {
                            notEmpty: {
                                message: 'El observacion es requerido'
                            }
                        }
                    },
                    'tipo': {
                        validators: {
                            notEmpty: {
                                message: 'El tipo es requerido'
                            }
                        }
                    },
                    'estatus': {
                        validators: {
                            notEmpty: {
                                message: 'El estatus es requerido'
                            }
                        }
                    }
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click 
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation 
                            Swal.fire({
                                text: "Los datos del formulario han sido validados",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });
                            form.submit();
                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Rellene todos los datos, intente nuevamente",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initAddUser();
        }
    };
}();
// Class definition
var solicitud_peticion = function () {
    // Shared variables
    const element = document.getElementById('modal_peticion_index');
    const form = element.querySelector('#form_peticion_index');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddUser = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'identificador': {
                        validators: {
                            notEmpty: {
                                message: 'El identificador es requerido'
                            }
                        }
                    },
                    'equipo_id': {
                        validators: {
                            notEmpty: {
                                message: 'El equipo es requerido'
                            }
                        }
                    },
                    'departamento_id': {
                        validators: {
                            notEmpty: {
                                message: 'El departamento es requerido'
                            }
                        }
                    },
                    'observacion': {
                        validators: {
                            notEmpty: {
                                message: 'El observacion es requerido'
                            }
                        }
                    },
                    'tipo': {
                        validators: {
                            notEmpty: {
                                message: 'El tipo es requerido'
                            }
                        }
                    },
                    'estatus': {
                        validators: {
                            notEmpty: {
                                message: 'El estatus es requerido'
                            }
                        }
                    }
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click 
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation 
                            Swal.fire({
                                text: "Los datos del formulario han sido validados",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });
                            form.submit();
                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Rellene todos los datos, intente nuevamente",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Estas seguro de cancelar el guardado de la informacion?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, cancelalo",
                cancelButtonText: "No, regresa",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Tu formulario ha sido cancelado",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initAddUser();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    solicitud_mantenimiento.init();
    solicitud_baja.init();
    solicitud_peticion.init();
});