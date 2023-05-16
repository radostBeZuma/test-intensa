<div class="plate-w-tools">
    <button class="plate-w-tools__btn-add" type="button">Добавить +</button>
    <button class="plate-w-tools__btn-remove" type="button">Удалить +</button>
</div>
<div class="news">
    <div class="news__container">
        <? foreach ($allNews as $news) : ?>
            <div class="news__item">
                <div class="news__wrap-img">
                    <img src="<?= $news['announce_url'] ?>" alt="<?= $news['title'] ?>" title="<?= $news['title'] ?>">
                </div>
                <div class="news__wrap-info">
                    <div class="news__date"><?= $news['date_created'] ?></div>
                    <a class="news__link" href="<?= '/' . $news['id'] . '/' ?>">
                        <h3 class="news__title"><?= $news['title'] ?></h3>
                    </a>
                    <div class="news__announcement"><?= $news['announce_text'] ?></div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
