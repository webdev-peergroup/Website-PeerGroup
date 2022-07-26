<?= $this->extend('Backend/template/index') ?>
<?= $this->section('content') ?>
<main>
    <h1>Dashboard</h1>
    <!-- <h5 class="label-date-filter">Filter tanggal</h5>
    <div class="date">
        <input type="date" name="date-filter" id="date-filter">
    </div> -->

    <!-- Recent Post -->
    <div class="recent-post" >
        <h2>Recent Post Artikel</h2>
        <table id="recent-post">
            <thead>
                <tr>
                    <th class="judul">Judul</th>
                    <th class="kategori">Kategori</th>
                    <th class="penulis">Penulis</th>
                    <th class="tgl">Tanggal Post</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allpost->getResultArray() as $data): ?>
                <tr>
                    <td class="judul-ar"><a href="/detail-artikel/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                    <td class="kategori-ar"><?php echo $data['kategori']?></td>
                    <td class="penulis-ar"><?php echo $data['penulis']?></td>
                    <td class="tgl-ar"><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <!-- <a href="#">Show All</a> -->
    </div>
    
    <!-- <h5 class="label-date-filter">Filter tanggal</h5>
    <div class="date kegiatan">
        <input type="date" name="date-filter" id="date-filter-kegiatan">
    </div> -->
    <!-- Recent Post -->
    <div class="recent-post" >
        <h2>Recent Post Kegiatan</h2>
        <table id="recent-post-kegiatan">
            <thead>
                <tr>
                    <th class="judul">Judul</th>
                    <th class="kategori">Judul</th>
                    <th class="penulis">Penulis</th>
                    <th class="tgl">Tanggal Post</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kegiatan->getResultArray() as $data): ?>
                <tr>
                    <td class="judul-keg"><a href="/home/detevent/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                    <td class="penulis-keg"><?php echo $data['penulis']?></td>
                    <td class="penulis-keg"><?php echo $data['kategori']?></td>
                    <td class="tgl-keg"><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <!-- <a href="#">Show All</a> -->
    </div>
</main>
<?= $this->endsection(); ?>