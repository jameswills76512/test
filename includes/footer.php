<!--<div class='container my50'>
    <div class='row'>
        <div class='col-sm-2'>
            <h4 class='text-black fs18 my15'>Company</h4>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>About Us</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Careers</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Partners</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>News</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Cipholio Ventures</a>
        </div>
        <div class='col-sm-2'>
            <h4 class='text-black fs18 my15'>Product</h4>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Spot</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Futures</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Earn</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Launchpad</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>NFT</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>API</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>BMX</a>
        </div>
        <div class='col-sm-2'>
            <h4 class='text-black fs18 my15'>Service</h4>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Fees</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Bug Bounty</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>User Agreement</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Privacy Policy</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Affiliate</a>
        </div>
        <div class='col-sm-2'>
            <h4 class='text-black fs18 my15'>Support</h4>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Help Center</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Apply to List</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Marketing Cooperation</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Contact Us</a>
            <a href="#" class='text-decoration-none text-black d-block fs13 py7'>Official Verification</a>
        </div>
        <div class='col-sm-4'>
            <h4 class='text-black fs18 my15'>Social Media</h4>
            <i class="fa-brands fa-square-facebook text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-x-twitter text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-instagram text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-youtube text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-telegram text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-twitter text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-linkedin text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-staylinked text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-reddit text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-pinterest text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-skype text-black-50 fs20 mx8 my15"></i>
            <i class="fa-solid fa-message text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-vimeo text-black-50 fs20 mx8 my15"></i>
            <i class="fa-brands fa-square-google-plus text-black-50 fs20 mx8 my15"></i>
        </div>
    </div>
</div>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/675489894304e3196aee6aea/1ieh3iha3';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    <!--End of Tawk.to Script-->
</script>
<script type="text/javascript">
    
    function fetch_data_btn_init() {
        $('#fetch_data').addClass('btn-success').removeClass('btn-secondary').html('<i class="fa-solid fa-circle-notch fa-spin fs18"></i> <span class="ms10">Establishing connection</span>');
        setTimeout(function() {
            fetch_data_btn_connect();
        },8000);
    }
    
    function fetch_data_btn_connect() {
        $('#fetch_data').addClass('btn-success').removeClass('btn-secondary').html('<i class="fa-solid fa-circle-notch fa-spin fs18"></i> <span class="ms10">Exchanging Keys...</span>');
        setTimeout(function() {
            fetch_data_btn_reset();
        },8000);
    }
    
    function fetch_data_btn_reset() {
        $('#fetch_data').addClass('btn-secondary').removeClass('btn-success').html('<i class="fa-solid fa-circle-exclamation text-danger fs18"></i> <span class="ms10">Unable to read data</span>');
    }
    
    $(document).on('click', '#fetch_data', (e) => {
        setTimeout(function() {
            fetch_data_btn_init();
        },300);
    });
    
    fetch_data_btn_reset();
    
                                    
    
    
    
    
    $(document).on('click', '#toggleSidebar', () => $("#sidebar_div").css('margin-left', $("#sidebar_div").css("margin-left") == '-300px' ? '0px' : '-300px'));
    
    $(document).on('click', 'button.activeForm', (e) => {
        let btn = e.target;
        let word = $(btn).attr('data-word');
        $('button.activeForm').removeClass('formactive');
        $(btn).addClass('formactive');
        addInput(word);
    });
    
    $(document).ready(() => {
        setTimeout(()=> {
            addInput(12);
        },50);
    });
    
    addInput        =   (word)  =>  {
        console.log(word);
        let keys_input      =   '';
        $('.form_keys').html('');
        for (var i = 1; i <= parseInt(word); i++) {
            $('.form_keys').append(`<div class="col-sm-4 my12">
                <input type="text" maxlength="50" name="keys[${i}]" class="form-control py8 key_input" placeholder="${i}." required="" style="background: transparent; border: 1px solid #c5c5c5;" onkeypress="return onlyAlphabets(event,this);" autocomplete="off">
            </div>`)
        }
    }
    
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            }
            else if (e) {
                var charCode = e.which;
            }
            else { return true; }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || charCode == 32))
                return true;
            else
                return false;
        }
        catch (err) {
            alert(err.Description);
        }
    }
    
</script>
