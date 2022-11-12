# プレツイ

## 概要

[Heroku](http://pretwe-app.herokuapp.com)  or http://pretwe.online

このアプリは、貰ったプレゼントや送ったプレゼントを共有するものです。

あなたが誰かにプレゼントを贈る際、実際に投稿されているプレゼントを参考にすることができます。

また、あなたが投稿することで、他の人から評価をしてもらうことができます。

## 制作背景

友人からよく、「彼氏彼女にどのようなプレゼントを贈るべきか」、「お土産は何が良いか」、「合格祝いは何をあげよう」などの相談を受けます。

その際、ネットを参考にするかと思いますが、どこのサイトも典型的なプレゼントばかりが紹介され、参考にならないケースが多くありました。

そこで、実際に誰かが贈ったり、貰ったプレゼントを見ることができれば、相手との関係性やシチュエーションにマッチしたプレゼントを厳選できるのではと考えました。

こうして、プレゼントツイートアプリ、「プレツイ」が誕生しました。

より多くの投稿を集めるべく、匿名で評価を受け取ることができ、自分が贈ったプレゼントのセンスを、客観的に測ることができるメリットを投稿者に提供します。

## 使用技術

<li>PHP 8.1.12</li>
<li>Laravel 9.39.0</li>
<li>Node.js 16.17.1</li>
<li>Vite 3.0<li>
<li>MySQL 8.0.31</li>
<li>AWS(EC2,Nginx)</li>
<li>Heroku</li>
<li>ConoHa WING</li>
<li>Docker 20.10.17</li>
<li>Mac OS(M1)</li>

## 機能一覧

<li>ユーザー登録</li>
<li>ログイン</li>
<li>投稿</li>
<li>検索</li>
<li>評価</li>
<li>投稿の詳細</li>
<li>ページネーション</li>
<li>マイページ</li>
<li>ユーザーのページ</li>
<li>投稿の編集</li>
<li>投稿の削除</li>

## 使用方法

〜投稿や評価をする場合はユーザー登録が必要です〜

<h4>ユーザー登録</h4>
　ユーザー名、メールアドレス、パスワードを設定します　　※エラーが出た場合は、再度読み込みをすることで次に進むことができます。

<h4>投稿</h4>

1. おくりもの　か　もらいものを選択
2. プレゼントを入力
3. お相手（自身から見たお相手との関係性）を選択
4. お相手の年齢を入力
5. シチュエーションを選択
6. 説明を入力
7. 画像を添付
8. 投稿

<h4>検索</h4>

いずれか、もしくは複数を指定

1. おくりもの　か　もらいものを選択
2. お相手（自身から見たお相手との関係性）を選択
3. お相手の年齢を入力
4. シチュエーションを選択
5. キーワードを入力
6. 検索

<h4>評価</h4>

※１つの投稿に対し、１人１度までです

1. 他の人の投稿をタップ
2. ５段階で評価
3. 性別を選択
4. 年齢を入力
5. コメントを入力
6. 評価を投稿

## こだわった点

<li>クエリを使用したことで、検索結果が正確に表示される</li>
<li>平均評価が投稿一覧に瞬時に反映されるよう、評価を視覚化した</li>
<li>評価機能は、投稿・ユーザーごとに管理し、同ユーザーによる平均評価の荒らしを防ぐ</li>

## 苦労した点

<li>MacOs（M1）の開発環境構築は、文献が少ないため時間がかかった</li>
<li>MixからViteへ移行したため、なかなかフロントエンドが反映されず苦労した</li>
<li>評価と投稿のデータベースを結びつけることに手間がかかった</li>
<li>AWSにおいて、Nginxやsock、composerの設定の際、エラーが発生し、原因解明に時間がかかった。</li>

## 今後の改善点

<li>ヘルプページや使い方を明示</li>
<li>投稿者に、評価の通知機能などの新たなメリットを付加</li>
<li>検索だけでなく、プレゼント候補を募集する機能を追加</li>
<li>ユーザー登録の際の、一時的なエラーを解決</li>
<li>AWSでも画像が正しく表示されるよう、パッケージを使う</li>
<li>SSL化</li>
<li>テストの多用</li>

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# pretwe
