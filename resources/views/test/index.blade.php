@extends('layouts.app')

@section('content')
    <h1>Test Page</h1>
@endsection

@section('footer-js')
    <script type="text/javascript">
        const loadFeedObject = async (url) => {
            try {
                const response = await fetch(url);

                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }

                const json = await response.json();
                console.log(json);
            } catch (error) {
                console.error(error.message);
            }
        };
        loadFeedObject('/testFeed');
    </script>
@endsection