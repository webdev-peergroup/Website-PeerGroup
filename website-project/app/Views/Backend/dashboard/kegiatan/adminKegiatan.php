<?= $this->extend("Backend/template/index") ?>
<?= $this->section('content');?>
<main>
    <h1><?=$title?></h1>

    <div class="recent-post">
                <h2>Recent Kegiatan</h2>
                <table id="recent-post">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal Post</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if ($kegiatan->getNumRows() == 0) {
                                echo "<tr>
                                            <td colspan='6'>No Data</td>
                                        </tr>";
                            }else
                            foreach ($kegiatan->getResultArray() as $data): ?>
                            <tr>
                                <td><a href="/home/detevent/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                                <td><?php echo $data['penulis']?></td>
                                <td><?php echo $data['kategori']?></td>
                                <td><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                                <td class="button-action">
                                    <form action="/kegiatan-admin/edit/<?=$data['slug']?>" method="post">
                                        <?csrf_field();?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="button" id="edit">Edit</button>
                                    </form>
                                    <form action="/kegiatan-admin/hapus/<?=$data['id']?>" method="post">
                                        <?csrf_field();?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="button" onclick="return confirm('Apakah anda yakin ingin menghapus <?=$data['judul']?> ?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
        </main>
        <!-- End of the main section -->
</main>
<?= $this->endsection()?>