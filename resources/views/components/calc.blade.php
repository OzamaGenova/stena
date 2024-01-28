<style>
    .modal {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .modal.hide {
        display: none;
    }

    .modal__bg {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal__content {
        z-index: 100;
    }
</style>
<div class="modal hide">
    <div class="modal__bg"
         onclick="document.querySelector('.modal').classList.add('hide') || document.body.classList.remove('clipped')"></div>
    <div class="modal__content">
        <style>
            .modal-card {
                width: 750px;
                min-height: 400px;
                padding: 36px;
                background-color: #fff;
            }

            .modal-card h1 {
                margin-bottom: 0;
                color: var(--color-button);
            }

            .modal-card h2 {
                margin-bottom: 40px;
            }

            .modal-card h1,
            .modal-card h2 {
                margin-top: 0;
            }

            .modal-card__item-row {
                padding-left: 18px;
                display: flex;
                align-items: center;
                gap: 30px;
            }

            .modal-card__item-row:not(:first-child) {
                margin-top: 10px;
            }

            .modal-card__item-row.hide {
                display: none;
            }

            .modal-card label {
                width: auto;
                display: flex;
                align-items: center;
                gap: 14px;
            }

            .modal-card input {
                width: 150px;
                height: 36px;
                border: 1px solid var(--color-text-lightgrey);
                outline: none;
            }

            .modal-card__add {
                padding-left: 18px;
                cursor: pointer;
                color: var(--color-button);
            }

            .modal-card__answer {
                margin-top: 60px;
            }

            .modal-card__answer .button {
                margin: 0 6px;
                display: inline;
            }
        </style>
        <div class="modal-card">
            <h1 class="font-xxl">Калькулятор расхода</h1>
            <h2 class="font-xxl">{{ $record->title }}</h2>

            <div>
                <p class="font-l">1. Укажите размеры стены</p>
                <div class="wall modal-card__item-row">
                    <label class="font-s">
                        <span>Ширина, мм</span>
                        <input name="width" type="number">
                    </label>
                    <label class="font-s">
                        <span>Высота, мм</span>
                        <input name="height" type="number">
                    </label>
                </div>
            </div>

            <div>
                <p class="font-l">2. Укажите размеры неокрашиваемых элементов (окна, двери, ниши и так далее)</p>
                <div class="hole modal-card__item-row hide">
                    <label class="font-s">
                        <span>Ширина, мм</span>
                        <input name="width" type="number">
                    </label>
                    <label class="font-s">
                        <span>Высота, мм</span>
                        <input name="height" type="number">
                    </label>
                    <script>
                        const remove = (e) => {
                            e.target.parentNode.remove();
                        }
                    </script>
                    <span style="cursor: pointer;" onclick="remove(event)">X</span>
                </div>
                <div class="hole modal-card__item-row">
                    <label class="font-s">
                        <span>Ширина, мм</span>
                        <input name="width" type="number">
                    </label>
                    <label class="font-s">
                        <span>Высота, мм</span>
                        <input name="height" type="number">
                    </label>
                </div>
            </div>

            <script>
                const add = () => {
                    const node = document.querySelector('.hole').cloneNode(true);
                    node.classList.remove('hide');
                    document.querySelector('.hole').parentNode.append(node);
                }
            </script>
            <p class="modal-card__add font-s" onclick="add()">+ Добавить ещё один элемент</p>

            <script>
                const toFloat = (val, def = 0) => {
                    return parseFloat(val) || def;
                }
                const getSquare = (surface) => {
                    return toFloat(surface.querySelector('input[name="width"]').value) * toFloat(surface.querySelector('input[name="height"]').value);
                }
                const calculate = () => {
                    const wall = document.querySelector('.wall');
                    let s = getSquare(wall);
                    const holes = document.querySelectorAll('.hole');
                    for (let i = 0; i < holes.length; i++) s -= getSquare(holes[i]);
                    s = Math.ceil(s / ((100 * 10) * (100 * 10)));

                    /* используется формат *л / *м², поэтому нужно рассчитать con */
                    const match = '{{ $record->consumption }}'.match(/(?<a>.+)\/(?<b>.+)/);
                    const a = parseInt(match?.groups.a, 10);
                    const b = parseInt(match?.groups.b, 10);
                    const error = isNaN(a) || isNaN(b) ? 'Расход краски задан неверно, поэтому невозможно определить расход по площади, обратитесь в службу поддержки' : '';
                    /* конечный расход на 1 км м*/
                    const con = toFloat(a) / toFloat(b);

                    const res = Math.ceil(s * con);
                    document.querySelector('.modal-card__answer').innerHTML = `Расход краски <span class="button">${res} литра</span> на ${s} м²`;
                    document.querySelector('.modal-card__error').innerHTML = error;
                }
            </script>
            <button class="button" onclick="calculate()">Рассчитать</button>

            <p class="modal-card__answer font-l"></p>
            <p class="modal-card__error font-l"></p>
        </div>
    </div>
</div>
