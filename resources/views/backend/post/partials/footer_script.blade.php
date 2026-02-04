@push('footer_scripts')
    <script src="{{ asset('assets') }}/js/plugins/select2/js/select2.full.min.js"></script>
    <script>
        One.helpersOnLoad(['jq-select2']);
    </script>
    <script>
        var editor1 = new RichTextEditor("#description");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#input-tags").selectize({
            delimiter: ",",
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });

        $(document).ready(function() {
            $('#imageInput').change(function(e) {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result).fadeIn();
                    }
                    reader.readAsDataURL(file);
                }
            });

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusRadios = document.querySelectorAll('input[name="status"]');
            const scheduleBox = document.getElementById('scheduleBox');

            function toggleSchedule() {
                const selected = document.querySelector('input[name="status"]:checked').value;

                if (selected === 'scheduled') {
                    scheduleBox.classList.remove('d-none');
                } else {
                    scheduleBox.classList.add('d-none');
                    document.getElementById('scheduled_at').value = '';
                }
            }

            // initial check
            toggleSchedule();

            // change event
            statusRadios.forEach(radio => {
                radio.addEventListener('change', toggleSchedule);
            });
        });
    </script>
    <script>
        $('#postTitle').on('keyup', function() {
            $('#metaTitle').val($(this).val());
        });
        $('#short_description').on('keyup', function() {
            $('#meta_description').val($(this).val());
        });
    </script>




    <script>
        document.getElementById('cover-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const coverUpload = document.querySelector('.cover-upload');
                    const existingImg = coverUpload.querySelector('img');
                    if (existingImg) {
                        coverUpload.removeChild(existingImg);
                    }
                    coverUpload.appendChild(img);
                    document.querySelector('.upload-text').style.display = 'none';
                };

                reader.readAsDataURL(file);
            }
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgArray = [];
            var maxImages = 5;
            $('.upload__inputfile').on('change', function(e) {
                var imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var files = e.target.files;
                var filesArr = Array.from(files);
                filesArr.some(function(file) {
                    if (!file.type.match('image.*')) {
                        return false;
                    }
                    imgArray.push(file);
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imgHTML = `
                        <div class='upload__img-box'>
                            <div style='background-image: url(${e.target.result})'
                                data-file='${file.name}' class='img-bg'>
                                <div class='upload__img-close'></div>
                            </div>
                        </div>`;
                        imgWrap.append(imgHTML);
                    };
                    reader.readAsDataURL(file);
                });
            });

            $('body').on('click', ".upload__img-close", function() {
                var fileName = $(this).parent().data("file");
                imgArray = imgArray.filter(file => file.name !== fileName);
                $(this).closest('.upload__img-box').remove();
            });
        }
    </script>
@endpush
