<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walistruktur extends CI_Controller { public function __construct() { goto d6a5K; d6a5K: parent::__construct(); goto JNoL8; zd23U: $this->load->model("\x44\x61\x73\x68\x62\157\x61\162\144\x5f\x6d\157\x64\145\x6c", "\144\141\163\150\x62\x6f\141\162\x64"); goto QtVwg; QMruU: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\165"))) { goto K0Fjx; } goto dLI4y; kglb5: qIDRa: goto uGpb2; jPgjI: $this->form_validation->set_error_delimiters('', ''); goto Qa4pI; JNoL8: if (!$this->ion_auth->logged_in()) { goto aML42; } goto QMruU; PKh1l: redirect("\x61\x75\x74\x68"); goto kglb5; XXkGA: $this->load->model("\x4d\141\x73\164\145\x72\137\x6d\x6f\x64\145\154", "\155\x61\163\164\145\x72"); goto zd23U; dLI4y: show_error("\x48\x61\x6e\x79\x61\x20\101\x64\x6d\x69\x6e\x69\163\x74\x72\141\x74\157\162\x20\x64\x61\x6e\x20\147\x75\x72\x75\x20\x79\141\156\x67\40\x64\151\x62\x65\162\x69\40\150\141\153\x20\x75\156\x74\x75\153\x20\x6d\145\156\x67\141\153\163\x65\x73\x20\150\141\x6c\x61\155\141\156\x20\151\x6e\151\x2c\x20\x3c\x61\x20\x68\162\x65\x66\75\42" . base_url("\144\141\163\150\142\157\x61\x72\x64") . "\x22\x3e\113\145\155\142\141\154\151\40\153\145\x20\x6d\145\x6e\x75\40\x61\167\x61\154\x3c\57\x61\x3e", 403, "\x41\x6b\x73\x65\x73\40\124\145\162\154\x61\162\141\x6e\147"); goto ZFOY4; kChhk: goto qIDRa; goto xkSXT; zSUYd: $this->load->model("\x44\x72\157\160\x64\157\x77\x6e\x5f\155\x6f\x64\x65\x6c", "\144\162\157\x70\144\x6f\x77\x6e"); goto jPgjI; xkSXT: aML42: goto PKh1l; QtVwg: $this->load->model("\x4b\x65\154\141\163\x5f\x6d\x6f\144\x65\154", "\153\x65\x6c\141\x73"); goto zSUYd; ZFOY4: K0Fjx: goto kChhk; uGpb2: $this->load->library(["\x64\141\x74\x61\164\141\142\154\145\163", "\x66\x6f\162\x6d\137\166\x61\x6c\x69\144\141\164\x69\x6f\x6e"]); goto XXkGA; Qa4pI: } public function output_json($data, $encode = true) { goto P6RRE; P6RRE: if (!$encode) { goto dcMmv; } goto mxVuW; mJLkr: $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\x74\151\x6f\x6e\x2f\152\163\157\156")->set_output($data); goto ZpXjm; OG2LU: dcMmv: goto mJLkr; mxVuW: $data = json_encode($data); goto OG2LU; ZpXjm: } public function index() { goto FvuR1; flsoL: Ptjz1: goto Ctvbm; ZBEhW: $this->load->view("\x6d\145\155\x62\x65\162\x73\57\x67\165\162\165\57\164\145\155\x70\x6c\x61\164\x65\163\57\150\145\x61\x64\145\x72", $data); goto YlMkV; LNsBQ: $data["\x74\x70"] = $this->dashboard->getTahun(); goto FdTMv; HYRSW: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto UEbhk; Ctvbm: $data["\x73\x74\x72\165\x6b\x74\x75\162"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto nPea2; k7xIt: foreach ($siswa as $key => $value) { $siswas[$value->id_siswa] = $value->nama; ZHZuc: } goto YhS09; YhS09: dAjB7: goto NldiH; hiyRl: $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto q3LUM; LtXAv: $smt = $this->master->getSemesterActive(); goto LNsBQ; NldiH: $data["\x73\151\x73\167\141\x73"] = $siswas; goto dEoor; QM_4X: $data["\163\164\x72\165\153\164\x75\162"] = $struktur; goto atIhp; FdTMv: $data["\x74\160\x5f\x61\x63\164\x69\166\145"] = $tp; goto rz1lB; U8KIF: $tp = $this->master->getTahunActive(); goto LtXAv; nPea2: oHCMB: goto yiahg; q3LUM: $siswas[''] = "\120\x69\x6c\x69\x68\x20\123\x69\163\x77\141"; goto k7xIt; YlMkV: $this->load->view("\155\145\x6d\x62\x65\162\x73\57\x67\165\x72\165\57\x77\141\x6c\x69\x2f\163\164\x72\x75\x6b\x74\x75\162"); goto tRGHU; FvuR1: $user = $this->ion_auth->user()->row(); goto k0evf; tRGHU: $this->load->view("\x6d\145\155\142\145\x72\x73\57\147\x75\162\x75\x2f\164\145\155\160\x6c\x61\164\145\163\57\x66\x6f\157\164\x65\162"); goto tqGpo; k0evf: $data = ["\x75\x73\145\162" => $user, "\152\165\x64\x75\154" => "\x53\x74\162\x75\x6b\164\165\x72\40\x4f\x72\147\141\x6e\151\x73\141\163\151", "\x73\x75\x62\152\165\x64\165\x6c" => "\x53\164\x72\x75\x6b\x74\165\162\x20\x4f\x72\147\x61\156\x69\x73\141\163\x69", "\163\145\x74\164\151\x6e\x67" => $this->dashboard->getSetting()]; goto U8KIF; qnlJG: if ($struktur == null) { goto Ptjz1; } goto QM_4X; yiahg: $data["\x67\x75\162\165"] = $guru; goto iLB6x; upxZU: $data["\x73\155\x74\x5f\x61\143\164\x69\166\x65"] = $smt; goto HYRSW; iLB6x: $data["\147\165\162\165\163"] = $this->dropdown->getAllGuru(); goto hiyRl; dEoor: $data["\151\x64\137\153\145\x6c\x61\x73"] = $guru->wali_kelas; goto ZBEhW; rz1lB: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto upxZU; UEbhk: $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas); goto qnlJG; atIhp: goto oHCMB; goto flsoL; tqGpo: } public function save() { goto a_9VO; ojoNs: $insert = $this->db->replace("\153\145\x6c\141\163\x5f\163\x74\x72\x75\x6b\164\165\x72", $data); goto d_ivV; a_9VO: $data = ["\151\144\x5f\153\x65\x6c\141\x73" => $this->input->post("\151\x64\x5f\x6b\x65\x6c\141\163"), "\153\145\x74\x75\141" => $this->input->post("\153\x65\164\165\x61"), "\167\x61\153\151\154\137\153\x65\x74\x75\141" => $this->input->post("\x77\141\x6b\x69\x6c\x5f\153\145\164\165\141"), "\x73\x65\x6b\x72\x65\164\141\x72\x69\x73\x5f\61" => $this->input->post("\163\145\x6b\x72\145\164\141\x72\x69\163\x5f\x31"), "\x73\145\x6b\162\x65\x74\x61\x72\x69\163\x5f\x32" => $this->input->post("\x73\145\x6b\162\145\164\141\162\x69\163\x5f\62"), "\x62\145\156\x64\141\150\141\x72\141\137\x31" => $this->input->post("\142\x65\156\x64\x61\x68\141\x72\141\137\61"), "\x62\x65\156\x64\141\150\141\162\141\137\62" => $this->input->post("\142\145\156\144\x61\x68\141\162\141\x5f\x32"), "\x73\x69\145\137\145\153\x73\164\x72\x61\153\x75\x72\x69\x6b\165\154\145\162" => $this->input->post("\163\151\x65\137\145\x6b\x73\x74\162\x61\153\x75\x72\151\153\165\154\x65\162"), "\x73\x69\145\x5f\165\160\141\143\141\x72\141" => $this->input->post("\x73\151\145\x5f\x75\x70\x61\x63\141\162\x61"), "\163\151\145\137\x6f\x6c\141\150\x72\x61\147\141" => $this->input->post("\x73\151\145\x5f\x6f\x6c\x61\150\x72\x61\x67\141"), "\x73\151\145\137\153\x65\141\147\x61\x6d\141\141\x6e" => $this->input->post("\x73\x69\145\x5f\x6b\145\x61\x67\141\x6d\x61\x61\156"), "\163\151\145\x5f\153\x65\141\155\x61\156\x61\156" => $this->input->post("\x73\151\145\137\153\145\141\155\x61\156\141\x6e"), "\x73\x69\x65\x5f\153\x65\x74\x65\162\x74\x69\x62\141\156" => $this->input->post("\163\x69\145\x5f\x6b\145\x74\x65\x72\x74\151\142\141\x6e"), "\163\151\x65\x5f\x6b\145\x62\x65\162\x73\151\x68\141\x6e" => $this->input->post("\x73\x69\145\x5f\x6b\x65\142\145\162\x73\x69\x68\141\156"), "\x73\x69\x65\137\x6b\x65\151\156\x64\141\x68\x61\x6e" => $this->input->post("\x73\x69\145\x5f\153\145\x69\156\144\x61\x68\141\156"), "\163\x69\145\137\153\145\x73\x65\150\141\164\141\156" => $this->input->post("\x73\151\145\137\x6b\x65\163\x65\150\x61\x74\x61\x6e"), "\163\x69\145\x5f\153\145\153\x65\154\x75\x61\162\147\141\141\x6e" => $this->input->post("\x73\151\145\137\153\145\153\145\154\x75\141\x72\x67\141\141\156"), "\163\151\145\137\x68\165\x6d\x61\x73" => $this->input->post("\163\x69\x65\x5f\150\x75\x6d\x61\163")]; goto ojoNs; d_ivV: $this->output_json($insert); goto Auwc4; Auwc4: } }
