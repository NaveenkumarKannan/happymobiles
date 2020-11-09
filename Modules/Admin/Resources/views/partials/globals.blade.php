<script>
    window.HappyMobiles = {
        version: '{{ happymobiles_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        rtl: {{ is_rtl() ? 'true' : 'false' }},
        langs: {},
        data: {},
        errors: {},
        selectize: [],
    };

    HappyMobiles.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    HappyMobiles.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    HappyMobiles.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
