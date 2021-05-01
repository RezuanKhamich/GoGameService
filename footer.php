<footer class="footer mt-5">
    <!--<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>-->
    <div class="modal-body">
        <h5>Popover in a modal</h5>
        <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
    </div>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>

    <div class="container">
        <div class="d-flex justify-content-between">
            <span>© 2020 GoGameSchool.</span>
            <a href="https://gogame_school@mail.ru">gogame_school@mail.ru</a>
            <div>
                <a href="https://www.instagram.com/gogame_school/?hl=ru"><img id="LnkBr00imageimageimage" alt="Instagram - Белый круг" data-type="image" itemprop="image" style="width: 36px; height: 36px; object-fit: cover;" src="https://static.wixstatic.com/media/da7ef6dd1302486c9a67baebe4b364bc.png/v1/fill/w_45,h_45,al_c,q_85,usm_0.66_1.00_0.01/da7ef6dd1302486c9a67baebe4b364bc.webp"></a>
                <a href="https://vk.com/gogameschool"><img id="LnkBr01imageimageimage" alt="Vkontakte - Белый круг" data-type="image" itemprop="image" style="width: 36px; height: 36px; object-fit: cover;" src="https://static.wixstatic.com/media/f96243f8a8f44e6c952d86da576cec13.png/v1/fill/w_45,h_45,al_c,q_85,usm_0.66_1.00_0.01/f96243f8a8f44e6c952d86da576cec13.webp"></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/verticalmenu.js"></script>

