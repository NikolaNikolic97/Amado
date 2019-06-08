@include("partials.head")
<script>
    let baseUrl = '{{url("/")}}';
    let csrf = '{{csrf_token()}}';
    let asset = '{{asset('/')}}';
</script>
@include("partials.message")
@include("partials.navigation")
@yield("mainContent")
@include("partials.subscribe")
@include("partials.footer")

