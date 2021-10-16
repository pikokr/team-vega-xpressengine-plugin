@section('page_title')
    <h2>Team Vega 플러그인 설정</h2>
@endsection

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    {{
        uio('formText', [
            'label' => 'API 베이스 URL',
            'name' => 'api_base_url',
            'description' => '예시: http://localhost',
            'value' => $url
        ])
    }}
    {{
        uio('formText', [
            'label' => 'API 인증 헤더 값',
            'name' => 'api_authorization',
            'description' => 'API 인증에 사용될 값입니다.',
            'value' => $auth
        ])
    }}
    <button class="btn btn-primary" type="submit">저장하기</button>
</form>
