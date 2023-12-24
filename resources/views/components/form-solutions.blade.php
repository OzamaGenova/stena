<style>
    .form-solutions form {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr 2fr;
        grid-template-areas:
            "name message"
            "phone message"
            "send send"
    }

    .form-solutions__toolbar {
        display: flex;
        justify-content: center;
    }
</style>
<section class="form-solutions width-80">
    <h2>Напишите, какое решение необходимо Вам</h2>
    <h3>и мы перезвоним Вам!</h3>
    <form>
        <label style="grid-area: name">
            <input class="input" placeholder="Ваше имя">
        </label>
        <label style="grid-area: phone">
            <input class="input" placeholder="Ваш номер телефона">
        </label>
        <label style="grid-area: message">
            <textarea class="input" placeholder="Текст сообщения"></textarea>
        </label>
        <div class="form-solutions__toolbar" style="grid-area: send">
            <button class="button">Отправить сообщение</button>
        </div>
    </form>
</section>
