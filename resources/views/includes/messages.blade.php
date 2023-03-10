@if(session()->has('success'))
    <div class="alert alert-success">
        <span class="form-control error" id="success">{{ session()->get('success') }}</span>
    </div>
@elseif(session()->has('error'))
    <span class="form-control error" id="error">{{ session()->get('error') }}</span>
@endif
@if (count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{--@if ($failures->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($failures->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
