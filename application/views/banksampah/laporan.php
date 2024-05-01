
<style>
    .container {
        background-color: rgba(255, 255, 255, 0.9); 
        padding: 25px; 
        border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
</style>
<body>
    <div class="container">
        <h2 class="text-center">PDF PRINT</h2>
        <form method="post" action="<?= base_url('generatepdf/pdftransaksi'); ?>">
            <div class="form-group">
                <label for="date_from">Date From:</label>
                <input type="date" class="form-control" id="date_from" name="date_from" required>
            </div>
            <div class="form-group">
                <label for="date_to">Date To:</label>
                <input type="date" class="form-control" id="date_to" name="date_to" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p></p>
        <table class="table table-bordered">
            <!-- ... -->
        </table>
    </div>
</body>
