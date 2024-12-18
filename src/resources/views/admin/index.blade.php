<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .modal-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Admin</h2>

        <!-- 検索・フィルター入力欄 -->
        <div class="mb-4">
            <form method="GET" action="{{ route('admin.index') }}">
                <input type="text" name="keyword" placeholder="名前やメールアドレス" class="form-control mb-2" value="{{ request('keyword') }}">
                <button type="submit" class="btn btn-dark">検索</button>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">リセット</a>
            </form>
        </div>

        <!-- 一覧テーブル -->
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->gender }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->type }}</td>
                    <td>
                        <!-- 詳細ボタン -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $contact->id }}">
                            詳細
                        </button>

                        <!-- モーダルウィンドウ -->
                        <div class="modal fade" id="modal-{{ $contact->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">詳細情報</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>お名前:</strong> {{ $contact->name }}</p>
                                        <p><strong>性別:</strong> {{ $contact->gender }}</p>
                                        <p><strong>メールアドレス:</strong> {{ $contact->email }}</p>
                                        <p><strong>電話番号:</strong> {{ $contact->phone }}</p>
                                        <p><strong>住所:</strong> {{ $contact->address }}</p>
                                        <p><strong>建物名:</strong> {{ $contact->building }}</p>
                                        <p><strong>お問い合わせの種類:</strong> {{ $contact->type }}</p>
                                        <p><strong>お問い合わせ内容:</strong> {{ $contact->content }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger">削除</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ページネーション -->
        <div class="d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>