<div class="col-12 col-sm-4 col-md-3 col-xl-2 p-0 sidebar-container">
  <nav>
    <div class="row no-gutters">
      <div class="sidebar">
        <div class="headers">
          <div class="">

          </div>
        </div>
        <div class="menu">
          <ul>
            <a href="<?= base_url() ?>dashboard">
              <li>
                <ion-icon name="home"></ion-icon><text>Dashboard</text>
              </li>
            </a>
            <a href="#">
              <li>
                <ion-icon name="business"></ion-icon><text>Business Service</text>
              </li>
            </a>
            <a href="<?= base_url() ?>its">
              <li>
                <ion-icon name="git-network"></ion-icon><text>IT Support</text>
              </li>
            </a>
            <a href="#csm_service" data-toggle="collapse">
              <li>
                <ion-icon name="people"></ion-icon><text>Customer Service</text>
              </li>
            </a>
            <div id="csm_service" class="collapse tree-dropdown">
              <ul>
                <a href="#">
                  <li>
                    <text>CSM Non-Marketing</text>
                  </li>
                </a>
                <a href="<?= base_url()?>csmarketing">
                  <li>
                    <text>CSM Marketing</text>
                  </li>
                </a>
              </ul>
            </div>
            <a href="<?php echo base_url('finance'); ?>">
              <li>
                <ion-icon name="stats"></ion-icon><text>Finance</text>
              </li>
            </a>
            <a href="#hrm_service" data-toggle="collapse">
              <li>
                <ion-icon name="person-add"></ion-icon><text>Human Resource</text>
              </li>
            </a>
            <div id="hrm_service" class="collapse tree-dropdown">
              <ul>
                <a href="<?php echo base_url()?>Data_pegawai/index">
                  <li>
                    <text>Employee Data</text>
                  </li>
                </a>
                <a href="<?php echo base_url()?>Data_gaji/index">
                  <li>
                    <text>Salary Data</text>
                  </li>
                </a>
                <a href="<?php echo base_url()?>GrafikPegawai/index">
                  <li>
                    <text>Employee Graph Data</text>
                  </li>
                </a>
                <a href="<?php echo base_url()?>Pemecatan/index">
                  <li>
                    <text>Dismissal Employee</text>
                  </li>
                </a>
              </ul>
            </div>
            <a href="<?php echo base_url()?>DSP/index">
              <li>
                <ion-icon name="git-branch"></ion-icon><text>Strategic Portfolio</text>
              </li>
            </a>
            <a href="#who_service" data-toggle="collapse">
              <li>
                <ion-icon name="cube"></ion-icon><text>Wholesale</text>
              </li>
            </a>
            <div id="who_service" class="collapse tree-dropdown">
              <ul>
                <a href="<?=base_url('wholesale/invenmasuk');?>">
                  <li>
                    <text>Inventory Pemasukkan</text>
                  </li>
                </a>
                <a href="<?=base_url('wholesale/invenkeluar');?>">
                  <li>
                    <text>Inventory Pengeluaran</text>
                  </li>
                </a>
                <a href="<?=base_url('wholesale/stock');?>">
                  <li>
                    <text>Stock Barang</text>
                  </li>
                </a>
                <a href="<?=base_url('wholesale/supplier');?>">
                  <li>
                    <text>Supplier</text>
                  </li>
                </a>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
