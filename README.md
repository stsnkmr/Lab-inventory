# 研究室書籍管理システム（在庫管理システム）

## 概要
研究室の書籍が多く、何があるか把握できないていない課題がありました。そこで管理システムを作りました。


## 使用言語、技術
<dl>
  <dt>言語</dt>
  <dd>HTML/CSS, JavaScript(React.js), PHP(Laravel)</dd>
  <dt>本番環境</dt>
  <dd>RaspberryPi(Raspbian)+nginx+mysql</dd>
</dl>

## 主な機能
 - 本のタイトルなどの項目の登録、編集、詳細、削除機能
 - 登録の際は、本の裏のバーコードを読み取り、登録する機能と手入力で登録する機能を選べる。(React + Quaggajs(WEBカメラを用いたバーコードリーダー))
 - バーコード入力する際は同時に複数の本を登録できるようにしている。
 - 本の詳細画面には、本の画像も登録できるようになっている。
 - 本のリストをCSVとして出力できるようになっている。
 - ユーザー権限と管理者権限を分けて、ユーザーからは登録、削除などの機能を制限し、リストと詳細しか見られないようにしてある。（誤操作防止も兼ねて）
 
## 動作画面
### リスト画面(admin)
![ScreenShot1](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot1.png)
![ScreenShot2](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot2.png)
### リスト画面(user)
![ScreenShot8](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot8.png)
### 登録手法選択画面
![ScreenShot3](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot3.png)
### バーコード登録画面
![ScreenShot4](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot4.png)
![ScreenShot5](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot5.png)
### 詳細画面
![ScreenShot6](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot6.png)
### 編集画面
![ScreenShot7](https://github.com/stsnkmr/Lab-inventory/blob/images/imgs/lab-inventory-screenshot7.png)
