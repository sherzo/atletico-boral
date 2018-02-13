<!-- Jquery Core Js -->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
@if(!isset($disabled))
	<!-- Select Plugin Js  -->
	<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
@endif
<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

<!-- Dropzone Plugin Js -->
<script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>

<!-- Input Mask Plugin Js -->
<script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<!-- Ckeditor -->
@yield('ckeditor')

<!-- Light Gallery Plugin Js -->
<script src="{{ asset('plugins/light-gallery/js/lightgallery-all.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- JQuery Steps Plugin Js -->
<script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ asset('plugins/sweetalert/sweetalert-dev.js') }}"></script>
@include('sweet::alert')

<!-- Autosize Plugin Js -->
<script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('js/pages/medias/image-gallery.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('js/pages/ui/tooltips-popovers.js') }}"></script>
@yield('scripts')


<!-- Demo Js -->
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/form-wizard.js') }}"></script>
<script src="{{ asset('js/pages/forms/form-validation.js') }}"></script>

<!-- Backend -->
<script src="{{ asset('js/backend.js') }}"></script>
<script src="{{ mix('js/manifest.js') }}"></script>
@yield('modules')
