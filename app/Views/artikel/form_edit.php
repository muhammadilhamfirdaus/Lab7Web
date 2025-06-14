<?= $this->include('template/admin_header'); ?>

<h2 style="text-align: center; margin-top: 30px;"><?= $title; ?></h2>

<div style="display: flex; justify-content: center; margin-top: 20px;">
    <form action="" method="post" style="width: 100%; max-width: 600px; background-color: #f9f9f9; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        
        <div style="margin-bottom: 20px;">
            <label for="judul" style="display: block; font-weight: bold; margin-bottom: 8px;">Judul Artikel</label>
            <input 
                type="text" 
                name="judul" 
                id="judul" 
                value="<?= esc($artikel['judul']); ?>" 
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" 
                required>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="isi" style="display: block; font-weight: bold; margin-bottom: 8px;">Isi Artikel</label>
            <textarea 
                name="isi" 
                id="isi" 
                cols="50" 
                rows="10" 
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" 
                required><?= esc($artikel['isi']); ?></textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="id_kategori" style="display: block; font-weight: bold; margin-bottom: 8px;">Kategori</label>
            <select 
                name="id_kategori" 
                id="id_kategori" 
                required 
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <?php foreach ($kategori as $k): ?>
                    <option 
                        value="<?= $k['id_kategori']; ?>" 
                        <?= ($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div style="text-align: right;">
            <input 
                type="submit" 
                value="Kirim" 
                class="btn btn-primary" 
                style="padding: 10px 20px; font-weight: bold;">
        </div>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>
