<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="table-responsive">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Kode Reg</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Alamat Pemohon</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Jenis/Nama Usaha</th>
      <th scope="col">Alamat Usaha</th>
      <th scope="col">Luas Lahan</th>
      <th scope="col">Luas Bangunan</th>
      <th scope="col">Status Lahan</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Persyaratan</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="ad1 in admin" :key="ad1.id">
      <td>{{ad1.code}}</td>
      <td>{{ad1.nama_pemohon}}</td>
      <td>{{ad1.alamat_pemohon}}</td>
      <td>{{ad1.no_tlp}}</td>
      <td>{{ad1.jenis_usaha}}</td>
      <td>{{ad1.alamat_usaha}}</td>
      <td>{{ad1.luas_lahan}}</td>
      <td>{{ad1.luas_bangunan}}</td>
      <td>{{ad1.status_lahan}}</td>
      <td>{{ad1.email}}</td>
      <td>
        {{ad1.verifikasi}}
        <Link :href="`/admin/${ad1.id}/edit`">Edit</Link>
      </td>
      <td>
        <Link :href="`/admin/${ad1.id}`">Lihat Berkas</Link>
      </td>
    </tr>
  </tbody>
  </table>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
  props: {
    admin: Array
  },
  components: {
    Link,
  },
}
</script>

<style>
.table-responsive{
  padding: 10px;
}
</style>