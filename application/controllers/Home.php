<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();

      $this->load->model('paket_model');
      $params = array('server_key' => 'SB-Mid-server-Ch3-rHUTXb8VN8zS1hCfvbvz', 'production' => false);
      $this->load->library('veritrans');
      $this->load->library('midtrans');
      $this->midtrans->config($params);
      $this->veritrans->config($params);

      if ($this->session->userdata('role') == 1) {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
      }

  //6. cara membuat class
  // - awali dengan kata class, kemudian lanjutkan nama_class dgn aturan penamaan huruf capital.
  // - lalu dilanjutkan dgn tanda {} untuk mengapit definisi dari class.

//   Apa perbedaan hak akses dari tipe data private, protected, public ?
// ➢ Public berfungsi untuk memberikan akses properti yang dapat diakses dari mana saja
// ➢ Private berfungsi untuk memberikan akses properti yang hanya dapat diakses dari dalam class tersebut
// ➢ Protected berfungsi untuk memberikan akses properti yang hanya dapat diakses dari dalam class atau turunannya


  }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();

        $this->load->view('home/template/header');
        $this->load->view('home/template/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/template/footer');
    }

    public function pesan(){
      $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();
      $data['pesan'] = $this->paket_model->getPaket1();
      $data['pesan2'] = $this->paket_model->getPaket2();

      // var_dump($this->cart->total_items());die;

      // var_dump($data['pesan']);die;
      $this->load->view('home/template/header');
      $this->load->view('home/template/navbar', $data);
      $this->load->view('home/pesan', $data);
      $this->load->view('home/template/footer');
    }

    public function profile(){
      $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();
      $data['pesan'] = $this->paket_model->getPaket1();
      $data['pesan2'] = $this->paket_model->getPaket2();


      // var_dump($data['pesan']);die;
      $this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim', ['required' => 'Data tidak boleh kosong']);


//if dan else adalah struktur kontrol dalam pemprograman yang digunakan untuk mengatur aliran eksekusi 
//program berdasarkan kondisi yang ditentukan.



      if ($this->form_validation->run() == false) {
        // code...
      $this->load->view('home/template/header');
      $this->load->view('home/template/navbar', $data);
      $this->load->view('home/profile', $data);
      $this->load->view('home/template/footer');

//header=Memuat view (tampilan) dengan nama 'header' yang berada di direktori 'home/template'.
//navbar=Memuat view dengan nama 'navbar' yang berada di direktori 'home/template', dengan memberikan data `$data` ke view tersebut.
//profile=Memuat view dengan nama 'profile' yang berada di direktori 'home', dengan memberikan data `$data` ke view tersebut.
//template=Memuat view dengan nama 'footer' yang berada di direktori 'home/template'.


    }else {
      $id = $this->input->post('id_pelanggan');
      $nama = $this->input->post('nama_pelanggan');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('no_hp');
      $tgl_lahir = $this->input->post('tgl_lahir');


//termasuk type data integer= variabel dengan value angka
      $this->db->set('tgl_lahir', $tgl_lahir);
      $this->db->set('alamat', $alamat);

//termasuk type data string= variabel dengan value huruf atau gabungan huruf angka
      $this->db->set('no_hp', $no_hp);
      $this->db->set('nama_pelanggan', $nama);
      $this->db->where('id_pelanggan', $id);
      $this->db->update('tb_pelanggan');

      $this->session->set_flashdata('message', '
      <div class="alert alert-danger" role="alert">
        Behasil!</div>');
        redirect('home/index');
    }

//bagaimana menulis kode program dengan prinsip...?
//guidelines=membuat komentar
//bestprctice=mempermudah dalam membaca kodingan, agar kodingan paham sampai mana.

    }
    public function login(){
      if ($this->session->userdata('email')) {
        redirect('user');
      }
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false ) {
        $data['judul'] = 'Login';

        $this->load->view('home/auth/login');
        }else {
            $this->_login();
          }
    }

    private function _login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      //lakukan query menggunakan query builder CI
      $user = $this->db->get_where('tb_pelanggan', ['email' => $email])->row_array();

      //jika usernya ada
      if ($user) {
          // cek password nya
          if ( $password == $user['password'] ) {
            $data = [
              'email' => $user['email'],
              'role' => $user['role']
            ];

            $this->session->set_userdata($data);
            if ( $user['role'] == 1 ) {

              redirect('wisata/admin');
            }elseif ( $user['role'] == 2 ){
              redirect('home/index');
            }

          }else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
              Password anda Salah!</div>');
              redirect('home/login');
          }

      }else {
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger" role="alert">
          Email Belum Terdaftar!</div>');
          redirect('home/login');
      }

    }


    public function registrasi(){


      $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
        'required' => 'Data tidak boleh kosong!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pelanggan.email]', [
        'is_unique' => 'Email sudah tersedia!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        'matches' => 'Password tidak cocok!',
        'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('home/auth/registrasi');
      }else {
        $data = [
          'nama_pelanggan' => $this->input->post('nama'),
          'email' => $this->input->post('email'),
          'password' => $this->input->post('password1'),
          'no_hp' => null,
          'alamat' => null,
          'jk' => null,
          'tgl_lahir' => null,
          'gambar' => 'default.jpg',
          'role' => 2
        ];

        //1. ini bagian string dan integer
        //integer = value angka. string = value huruf atau gabungan huruf dan angka

        $this->db->insert('tb_pelanggan', $data);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          <strong>Selamat!</strong> Anda sudah registrasi, silahkan login
        </div>
        ');

        redirect('home/login');
      }
    }

    public function logout(){
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role');
      $this->cart->destroy();

      redirect('home/index');
    }

    public function blocked(){
      $this->load->view('block');

    }

    public function pesanan($id = null){
      $produk = $this->paket_model->find($id);

      $data = array(
          'id'      => $produk->id_detail_kategori,
          'qty'     => 1,
          'price'   => $produk->harga,
          'name'    => $produk->jenis_kategori
          );

          $this->cart->insert($data);
          redirect('home/pesan');
    }

    public function hapus_cart(){
      $this->cart->destroy();
      redirect('home/pesan');
    }

    public function detail_pesanan(){
      $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();

      // var_dump($this->cart->total_items());die;

      // var_dump($data['pesan']);die;

      $this->load->view('home/template/header');
      $this->load->view('home/template/navbar', $data);
      $this->load->view('home/detail_pesanan', $data);
      $this->load->view('home/template/footer');
    }

    public function pembayaran(){
      $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();
      $id = $data['user']['id_pelanggan'];
       // $this->db->get_where('tb_pesanan', array('id_pelanggan' => $id))->result_array();
       // $this->db->order_by('order_id', 'DESC');

      // var_dump($data['pembayaran']);die;
      // var_dump($this->cart->total_items());die;
      //
      $this->db->select('*');
      $this->db->from('tb_pesanan');
      $this->db->where('id_pelanggan', $id);
      $this->db->order_by('order_id', 'desc');
      $data['pembayaran'] = $this->db->get()->result_array();

      // var_dump($data['pesan']);die;
      $this->load->view('home/template/header');
      $this->load->view('home/template/navbar', $data);
      $this->load->view('home/pembayaran', $data);
      $this->load->view('home/template/footer');
    }

    public function detail_pembayaran($id){
      $data['user'] = $this->db->get_where('tb_pelanggan', array('email' => $this->session->userdata('email')))->row_array();
      $data['pembayaran'] = $this->db->get_where('tb_pesanan', array('order_id' => $id))->row_array();

      // var_dump($data['pembayaran']);die;
      // var_dump($this->cart->total_items());die;

      // var_dump($data['pesan']);die;
      $this->load->view('home/template/header');
      $this->load->view('home/template/navbar', $data);
      $this->load->view('home/detail_pembayaran', $data);
      $this->load->view('home/template/footer');
    }

    public function verify($no_pemesanan = null){
      $result = $this->db->get_where('tb_pesanan', ['order_id' => $no_pemesanan])->row_array();
      $check = get_object_vars($this->midtrans->status($no_pemesanan));

      if ($result['status_pembayaran'] !== $check['transaction_status']) {
          $this->db->set('status_pembayaran', $check['transaction_status']);
          $this->db->where('order_id', $no_pemesanan);
          $this->db->update('tb_pesanan');
          redirect('home/pembayaran');
      } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-has-icon alert-dismissible fade show" role="alert">
          <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
          <div class="alert-body">
              <div class="alert-title">Gagal Verify !</div>
              Anda belum melakukan pembayaran, mohon segeran dibayar !
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>');

          redirect('home/pembayaran');
      }
    }

    //2. ini penggunaan if else = diguanakan untuk menguji suatu kondisi atau beberapa kondisi secara berurutan

    public function batalkan_transaksi($no_pemesanan)
    {

      // var_dump($this->veritrans->cancel($no_pemesanan));die;
        if ($this->veritrans->cancel($no_pemesanan) == '200') {
            $this->db->update('tb_pesanan', ['status_pembayaran' => 'cancel'], ['order_id' => $no_pemesanan]);
            // $this->db->delete('pemesanan', ['no_pemesanan' => $no_pemesanan]);
            redirect('home/pembayaran');
        } else {

            redirect('home/pembayaran');
        }
    }



}



//2. guidelines = aturan yang dapat digunakan bersamaan dalam hal penamaan, penggunaan komentar dan identasi
// cara sudah teruji untuk membuat kode program.

// best practice mengacu pada seperangkat aturan, metode. contohnya penamaan variable dan fungsi, komentar dan dokumentasi.

//3. debugging
//- identifikasi error dan mengumpulkan Error
//- menemukan lokasi bug melalui tampilan problem pada text editor atau browser.
//- analisis error.
//-lakukan debugging.
//- perbaiki dan validasi.

//4. kode program agar dipahami oleh semua pihak
//- tulis code dengan simple
//- konsisten (penamaan variable-case sensitive)
//- membuat komentar pada baris coding
//- membuat dokumentasi (paper)

//5. -perbedaan perangkat lunak secara berstruktur dan pengembangan pernagkat lunak berorientasi objek ?
// Pendekatan Dasar:

// Pengembangan Terstruktur: Pendekatan terstruktur berfokus pada pemisahan program menjadi modul atau fungsi-fungsi yang independen. Setiap modul memiliki tugas dan tanggung jawab tertentu. Pengembangan terstruktur seringkali berpusat pada prosedur-prosedur yang dijalankan berurutan.
// Pengembangan Berorientasi Objek: Pendekatan berorientasi objek berfokus pada pemodelan perangkat lunak sebagai kumpulan objek yang memiliki atribut dan metode. Objek adalah instance dari kelas, yang mendefinisikan struktur dan perilaku objek tersebut. OOP lebih berfokus pada konsep entitas yang saling berinteraksi.

// Abstraksi:

// Pengembangan Terstruktur: Abstraksi dalam pengembangan terstruktur biasanya lebih sederhana daripada OOP. Modul atau fungsi digunakan untuk mengabstraksi logika tertentu.
// Pengembangan Berorientasi Objek: Abstraksi dalam OOP lebih tinggi karena objek menggambarkan entitas nyata atau konsep dalam domain masalah yang sedang dipecahkan. Konsep ini lebih dekat dengan pemahaman manusia tentang dunia nyata.

// Penggunaan Variabel:

// Pengembangan Terstruktur: Penggunaan variabel adalah bagian penting dari pengembangan terstruktur, tetapi variabel tersebut umumnya bersifat global atau lokal dalam ruang lingkup modul.
// Pengembangan Berorientasi Objek: Variabel biasanya terkait dengan atribut objek dan dikelola dalam konteks objek tersebut.

//-perbedaan data flow diagram dan unified modelling language

// Tujuan Utama:
// Data Flow Diagram (DFD): DFD adalah alat yang digunakan untuk menggambarkan aliran data dalam sistem. Tujuan utamanya adalah untuk menggambarkan bagaimana data mengalir dari satu proses ke proses lain dalam sistem, serta bagaimana data tersebut disimpan atau digunakan oleh entitas eksternal.
// Unified Modeling Language (UML): UML adalah bahasa pemodelan yang lebih komprehensif. Tujuannya mencakup pemodelan berbagai aspek sistem, termasuk struktur kelas, perilaku, interaksi antara objek, dan banyak aspek lainnya selain aliran data.

// Fokus Pemodelan:
// Data Flow Diagram (DFD): DFD fokus pada pemodelan aliran data dan proses dalam sistem. DFD tidak terlalu memperhatikan aspek seperti struktur kelas atau urutan waktu.
// Unified Modeling Language (UML): UML menyediakan berbagai jenis diagram, termasuk diagram kelas (untuk pemodelan struktur kelas), diagram urutan (untuk pemodelan interaksi antara objek dalam waktu), dan banyak lagi. UML mencakup berbagai aspek dalam pengembangan perangkat lunak.

// Notasi:
// Data Flow Diagram (DFD): DFD menggunakan notasi yang relatif sederhana, seperti panah untuk menggambarkan aliran data, lingkaran untuk proses, dan kotak untuk penyimpanan data.
// Unified Modeling Language (UML): UML memiliki notasi yang lebih kaya dan kompleks, termasuk ikon khusus untuk berbagai jenis elemen, seperti kelas, objek, relasi, dan sebagainya.


//7. saya menggunakan bootstrap tipenya open source  software karena bisa diedit dan divariasi secara gratis.


//5. 1. perbedaan pendekatan, fokus, reusabilitas, pemodelan dunia nyata, pengelompokkan.
//terstruktur : menggunakan pendekatan prosedural.
//objek : menggunakan berbasis objek terdiri dari objek2 yg memiliki atribut dan perilaku tertentu.

//terstruktur : lebih fokus ke dalam modul2 terpisah.
//objek : identifikasi objek2 yg saling berinteraksi untuk mencapai tujuan.

//terstruktur : objek2 sudah ada digunakan kembali dalam proyek2 lain.
//objek : tidak sefleksibel dlm hal reusabilitas, karna ketergantungan yg erat dlm modul lain.

//terstruktur : mempresentasikan sitem perangkat lunak sesuai dengan struktur dunia nyata.
//objek : fokus pada algortima.

// terstruktur : kode dan fungsi terkait dikelompokkan bersama dalam satu objek.
//objek : fungsi2 terkait dikelompokkan dalam modul2 terpisah.



//Tujuan DPD untuk menggambarkan aliran data suatu sistem, menggunakan simbol seperti kotak untuk proses
//panah untuk aliran data.
//UML digunakan untuk memodelkan berbagai aspek sistem seperti struktur, perilaku dan interaksi, menggumakan notasi
//kompleks seperti kelas, objek.
