<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>
<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Brianna dan Bottomwise</td>
            <td>@1</td>
            <td>Rp 125.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <span>Rp 125.000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr />
    <p>Jl Simp. Sungai Duren, Mr. Jambi</p>
    <h3 class="mt-3">Metode Pembayaran</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No Rekening: John Smith, BCA, 11223300</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
        <button class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>