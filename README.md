## Enhance Your Travel Experience with Seamless Reservations
You colud book for confortable, Wishing you a wonderfor journey.
![25D7CD9F-3A13-42DB-A65A-A6E7F828B785](https://github.com/shobidayo/new_repository/assets/142150831/624a1278-979e-4cd1-b73e-ca76085cfb16)


## サービスのURL
https://confort-booking.com/

## サービスの概要
快適にホテル予約を行えるようにするためのアプリケーションです。

## アプリケーションへの想い
思い出作りや旅行をする際にホテルは重要な場所。  
ホテルを予約するには手間がかかってしまうことや、予約の方法が難しいというお声が気になっています。  
そのような方々でも簡単に予約ができ、快適に旅行を楽しめるようにしたいという想いから作成しました。


## ER図
![スクリーンショット 2023-11-13 201026](https://github.com/shobidayo/new_repository/assets/142150831/8d27762a-e8a1-432e-95e0-02ab50db7696)
[ER図.pdf](https://github.com/shobidayo/new_repository/files/13334140/ER.pdf)

## 機能一覧
| TOP画面  | ユーザー登録画面 |
| :---: | :---: | 
| ![スクリーンショット 2023-11-14 104805](https://github.com/shobidayo/new_repository/assets/142150831/e8e58352-ef36-433c-96cd-25d21bd8111a) | ![スクリーンショット 2023-11-14 105117](https://github.com/shobidayo/new_repository/assets/142150831/55ae4a66-4752-4203-817e-251bb23b4bdf)
| TOPを開いた際に、一覧ですべて見ることができるような<br>実装をしました。 |新規登録画面は必要のない情報は<br>入力しないように実装しました。|  

| ログイン画面  | プロフィール画面 |
| :---: | :---: |
|![スクリーンショット 2023-11-14 105139](https://github.com/shobidayo/new_repository/assets/142150831/0c8336c5-0caf-4469-a887-668de8cd8508)|![スクリーンショット 2023-11-14 110132](https://github.com/shobidayo/new_repository/assets/142150831/94045d40-8dea-49a2-ae80-7a474558866d)|
| メールアドレスとパスワードでログインできるように<br>実装しました。 |プロフィール編集、パスワード更新、アカウント削除ができるように実装しました。|  

| ログイン後の一覧画面  | 予約検索画面 |
| :---: | :---: |
|![スクリーンショット 2023-11-14 111418](https://github.com/shobidayo/new_repository/assets/142150831/4191b60b-8187-44e6-8d21-ff3beb8ed2e2)|![スクリーンショット 2023-11-14 111457](https://github.com/shobidayo/new_repository/assets/142150831/6374d85e-c5a0-4856-b7c0-81a51641bc4e)|
|ログイン後、予約確認と予約をするボタンが表示されるように実装しました。|泊まりたい人数、お部屋のタイプを選択できるようにしました。<br>また、チェックイン日から最大７日まで選択できるように実装しました。|  

|プラン選択画面|予約情報画面|
| :---: | :---: |
|||

## 使用技術
#### フロントエンド
- HTML
- CSS
- JavaScript
#### バックエンド
- PHP 
#### データベース・ストレージサービス
- Mysql(10.2.38-MariaDB)
- Amazon S3

## 今後追加する機能
お客様が快適にご予約できることも重要ですが、管理者側も操作が簡単なるようにしていきたいと考えております。

- 管理者側（ダッシュボード、予約編集・削除などの機能など）
- お客様側（自動メール、予約のこだわり検索機能など）