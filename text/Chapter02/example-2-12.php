<?php
$_POST['comments'] = <<<_COMMENTS_
お疲れ様です。山城です。
添付ファイルでも記載しましたが、
勉強会を隔週（第２、第４金曜日）の定例化したいと思います。

次回の「勉強会vol.02」は、
１０月２８日（金）　１９時〜２１時（２時間を予定）

＜勉強会の内容＞
１、プログラミングサイトで、各自勉強（１９時〜１９時３０分）
２、テーマを決めて、勉強（※まだ未定）（１９時３０分〜２１時）
※２のテーマについて、皆さんに何をしたいか、募集します。ご意見をくださいよろしくお願いします。例えば、「ワードプレスを使ってサイトを構築する」や「JavaScriptを使ってアプリを作る」などなど。
＜飲み会のお知らせ＞
次回（１０月２８日）の勉強会の後に、飲み会を行いたいと思います。
■飲み会の目的
せっかく集った受講生同士のコミュニケーションを、勉強会を通して、図りたいとも考えています！卒業後もそれぞれが就職する業界のことについて情報交換したりするようなことができれば、各自のスキル向上や仕事の幅にも繋がると思います。
ぜひご参加よろしくお願いします。
_COMMENTS_;
// Grab the first thirty characters of $_POST['comments']
print mb_substr($_POST['comments'], 0, 30);
// Add an ellipsis
print '...';