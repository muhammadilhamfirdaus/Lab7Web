<?= $this->include('template/admin_header'); ?>

<div class="container py-4">
    <h2 class="mb-4">Daftar Artikel</h2>

    <!-- Form Pencarian & Filter Kategori -->
    <form method="get" class="row mb-3">
        <div class="col-md-5">
            <input type="text" name="q" value="<?= $q; ?>" class="form-control" placeholder="Cari judul artikel...">
        </div>
        <div class="col-md-5">
            <select name="kategori_id" class="form-select">
                <option value="">-- Semua Kategori --</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= $kategori_id == $k['id_kategori'] ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Cari</button>
        </div>
    </form>

    <!-- Tabel Artikel -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($artikel): ?>
                    <?php foreach ($artikel as $row): ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td>
                                <strong><?= esc($row['judul']); ?></strong>
                                <br>
                                <small class="text-muted"><?= esc(substr($row['isi'], 0, 50)); ?>...</small>
                            </td>
                            <td><?= esc($row['nama_kategori']); ?></td>
                            <td>
                                <span class="badge bg-<?= $row['status'] == 'draft' ? 'secondary' : 'success'; ?>">
                                    <?= ucfirst($row['status']); ?>
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning me-1" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">
                                    ✏️ Ubah
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>"
                                   onclick="return confirm('Yakin menghapus data?');">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?= $pager->only(['q', 'kategori_id'])->links(); ?>
    </div>
</div>

<?= $this->include('template/admin_footer'); ?>
