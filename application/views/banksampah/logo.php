<style>
    .logo{
        margin-top: 10px;
        margin-left: 10px;
        position: absolute;
        width: 50px;
        transition: all 1s ease-in-out;
    }
    @media screen and (min-width: 700px) {
        .logo{
            opacity: 0%;
            transition: all 1s ease;
        }
    }
</style>

<div>
    <img src="<?=base_url()?>img/BetterLogo.png" class="logo">
</div>