<?= $this->extend('/Apps/admin_template');?>
<?= $this->section('content')?>
        <main>
            <h1>Dashboard</h1>
    
            <h5 class="label-date-filter">Filter tanggal</h5>
            <div class="date">
                <input type="date" name="date-filter" id="date-filter">
            </div>
            <!-- Insight -->
            <!-- <div class="insight">
                ****To use, copy from here****
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales</h3>
                            <h1>$25,04</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                ****End of Copy****
                <div class="expenses">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales</h3>
                            <h1>$25,04</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div> -->
            <!-- End of Insight -->

            <!-- Recent Post -->
            <div class="recent-post" >
                <h2>Recent Post Artikel</h2>
                <table id="recent-post">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal Post</th>
                            <th>Tanggal Update</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allpost->getResultArray() as $data): ?>
                        <tr>
                            <td><a href="/detail-artikel/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                            <td><?php echo $data['kategori']?></td>
                            <td><?php echo $data['penulis']?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['updated_at'])); ?></td>
                           
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
            
            <h5 class="label-date-filter">Filter tanggal</h5>
            <div class="date kegiatan">
                <input type="date" name="date-filter" id="date-filter-kegiatan">
            </div>
            <!-- Recent Post -->
            <div class="recent-post" >
                <h2>Recent Post Kegiatan</h2>
                <table id="recent-post-kegiatan">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal Post</th>
                            <th>Tanggal Update</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kegiatan->getResultArray() as $data): ?>
                        <tr>
                            <td><a href="/detail-artikel/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                            <td><?php echo $data['kategori']?></td>
                            <td><?php echo $data['penulis']?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['updated_at'])); ?></td>
                          
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
        </main>
        <!-- End of the main section -->
<?= $this->endsection();?>       