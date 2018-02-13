//Advanced form with validation
var form = $('#wizard_with_validation').show();
form.steps({
    headerTag: 'h3',
    bodyTag: 'fieldset',
    transitionEffect: 'slideLeft',
    onInit: function (event, currentIndex) {
        $.AdminBSB.input.activate();

        //Set tab width
        var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
        var tabCount = $tab.length;
        $tab.css('width', (100 / tabCount) + '%');

        //set button waves effect
        setButtonWavesEffect(event);
    },
    onStepChanging: function (event, currentIndex, newIndex) {
        if (currentIndex > newIndex) { return true; }

        if (currentIndex < newIndex) {
            form.find('.body:eq(' + newIndex + ') label.error').remove();
            form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
        }

        form.validate().settings.ignore = ':disabled,:hidden';
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
        setButtonWavesEffect(event);
    },
    onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ':disabled';
        return form.valid();
    },
    onFinished: function (event, currentIndex) {
        $(form).submit();
        //swal("Good job!", "Submitted!", "success");
    }
});