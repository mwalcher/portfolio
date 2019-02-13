<script src="https://use.fontawesome.com/9cc2906ee2.js"></script>
<script>
function recaptchaRender(token){
    const form = document.querySelector('form.recaptcha');
    const submit = form.querySelector('[type="submit"]');
    grecaptcha.render(submit, {
        'sitekey' : '{{config('services.google-recaptcha.sitekey')}}'
    });
    form.submit();
}
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
