<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walistruktur extends CI_Controller { public function __construct() { goto GkSSg; X1w5O: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) { goto qXp28; } goto nT2jH; XuxKU: $this->form_validation->set_error_delimiters('', ''); goto SRz45; aJFZk: goto GkKVS; goto YjJy0; VyfFE: $this->load->model("\x4d\141\163\x74\145\x72\x5f\155\157\x64\x65\x6c", "\155\x61\163\x74\145\x72"); goto vs9lx; vs9lx: $this->load->model("\x44\x61\x73\x68\142\157\141\162\x64\137\155\157\x64\x65\154", "\144\141\x73\150\x62\157\141\x72\x64"); goto EJ3o2; GkSSg: parent::__construct(); goto sH6Pc; EJ3o2: $this->load->model("\x4b\x65\x6c\141\x73\137\x6d\x6f\144\145\154", "\153\145\154\141\x73"); goto hermX; YjJy0: v3hhu: goto t_rqo; hermX: $this->load->model("\104\x72\157\160\x64\157\x77\156\137\155\157\x64\145\x6c", "\x64\x72\x6f\160\x64\157\x77\156"); goto XuxKU; rp9E_: qXp28: goto aJFZk; t_rqo: redirect("\141\165\164\x68"); goto IwkCs; yPPcP: $this->load->library(["\x64\x61\x74\141\x74\141\142\154\x65\163", "\146\x6f\162\155\x5f\x76\141\x6c\151\x64\x61\x74\x69\157\x6e"]); goto VyfFE; IwkCs: GkKVS: goto yPPcP; sH6Pc: if (!$this->ion_auth->logged_in()) { goto v3hhu; } goto X1w5O; nT2jH: show_error("\x48\141\156\x79\x61\x20\101\x64\155\x69\x6e\151\x73\x74\x72\141\164\157\162\40\x64\141\x6e\40\147\x75\x72\165\40\171\x61\156\x67\40\x64\151\142\x65\x72\x69\x20\x68\141\153\40\165\x6e\164\165\153\40\x6d\145\156\147\141\153\163\145\x73\x20\x68\x61\x6c\141\155\x61\x6e\40\x69\156\151\x2c\x20\x3c\141\x20\150\x72\x65\146\75\42" . base_url("\144\141\x73\150\x62\157\141\x72\x64") . "\x22\76\113\x65\x6d\142\141\x6c\151\40\153\145\40\155\x65\x6e\165\40\x61\167\141\x6c\x3c\57\x61\76", 403, "\101\x6b\x73\145\x73\x20\x54\x65\x72\x6c\141\162\x61\156\x67"); goto rp9E_; SRz45: } public function output_json($data, $encode = true) { goto liO2P; Dk2K2: $data = json_encode($data); goto Hf6uR; liO2P: if (!$encode) { goto eqyw2; } goto Dk2K2; Hf6uR: eqyw2: goto riGTP; riGTP: $this->output->set_content_type("\x61\160\x70\154\151\143\x61\164\x69\157\156\57\x6a\x73\157\156")->set_output($data); goto FeLj6; FeLj6: } public function index() { goto Uyahu; vMYCf: OWMgT: goto WlVQS; fnkzs: $siswas[''] = "\120\151\x6c\151\150\x20\123\x69\163\167\141"; goto u2m7a; WlVQS: $data["\x67\x75\x72\165"] = $guru; goto oa1ot; UYG5k: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto Hb1Mk; kcAAB: $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas); goto VNb5E; rP7SS: goto OWMgT; goto uXCDb; jZcPO: $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto fnkzs; Hb1Mk: $data["\x73\x6d\x74\137\x61\x63\164\x69\166\x65"] = $smt; goto MEPia; i0Zzm: $data["\x69\x64\137\x6b\x65\x6c\141\163"] = $guru->wali_kelas; goto g6UB4; Uyahu: $user = $this->ion_auth->user()->row(); goto gPG_0; UTMnv: $data["\x74\x70"] = $this->dashboard->getTahun(); goto c_94l; CffEH: $smt = $this->master->getSemesterActive(); goto UTMnv; dy7F8: $data["\x73\x69\163\x77\x61\163"] = $siswas; goto i0Zzm; gPG_0: $data = ["\165\163\145\x72" => $user, "\x6a\165\144\165\154" => "\123\x74\162\165\x6b\164\x75\x72\40\x4f\162\147\x61\156\x69\163\x61\x73\x69", "\163\165\x62\152\165\144\x75\x6c" => "\x53\164\x72\165\x6b\164\x75\162\x20\117\x72\147\141\156\x69\163\x61\163\x69", "\163\145\164\164\151\156\147" => $this->dashboard->getSetting()]; goto DBXCH; YYFAP: O5oAd: goto dy7F8; c_94l: $data["\164\160\x5f\x61\143\x74\151\x76\145"] = $tp; goto UYG5k; MEPia: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto kcAAB; VlLcF: $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\57\147\x75\x72\165\57\167\141\154\x69\x2f\163\164\162\x75\x6b\x74\x75\x72"); goto Q18rX; tz7Su: $data["\x73\164\x72\x75\x6b\164\x75\x72"] = $struktur; goto rP7SS; uXCDb: EcZ_V: goto M40T4; Q18rX: $this->load->view("\155\145\x6d\142\145\162\163\57\147\x75\162\165\57\x74\145\155\160\x6c\x61\164\x65\x73\x2f\x66\157\157\x74\145\162"); goto cQ26m; u2m7a: foreach ($siswa as $key => $value) { $siswas[$value->id_siswa] = $value->nama; xzRv7: } goto YYFAP; M40T4: $data["\x73\164\x72\x75\x6b\x74\x75\x72"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto vMYCf; DBXCH: $tp = $this->master->getTahunActive(); goto CffEH; oa1ot: $data["\x67\x75\x72\165\163"] = $this->dropdown->getAllGuru(); goto jZcPO; VNb5E: if ($struktur == null) { goto EcZ_V; } goto tz7Su; g6UB4: $this->load->view("\x6d\145\x6d\142\x65\x72\163\x2f\x67\165\162\x75\x2f\x74\x65\155\160\154\141\x74\145\163\x2f\x68\145\x61\x64\145\x72", $data); goto VlLcF; cQ26m: } public function save() { goto nJpRN; nJpRN: $data = ["\x69\x64\x5f\153\145\154\141\x73" => $this->input->post("\151\x64\x5f\x6b\x65\154\x61\163"), "\153\145\164\165\141" => $this->input->post("\x6b\x65\x74\x75\141"), "\x77\x61\153\x69\154\137\153\x65\x74\x75\141" => $this->input->post("\x77\x61\x6b\x69\154\137\153\145\164\x75\x61"), "\x73\x65\153\162\x65\164\141\162\x69\163\x5f\x31" => $this->input->post("\163\x65\x6b\162\145\164\141\x72\x69\x73\137\61"), "\x73\x65\153\x72\145\164\141\x72\151\x73\x5f\x32" => $this->input->post("\163\145\x6b\162\145\164\x61\x72\x69\x73\x5f\x32"), "\142\x65\156\x64\x61\x68\x61\162\x61\137\61" => $this->input->post("\x62\145\x6e\144\x61\150\141\x72\141\x5f\61"), "\x62\145\x6e\x64\141\150\x61\x72\x61\x5f\62" => $this->input->post("\x62\x65\156\x64\x61\x68\141\x72\141\x5f\x32"), "\x73\151\x65\137\x65\x6b\x73\164\x72\x61\x6b\x75\x72\x69\153\x75\154\145\162" => $this->input->post("\163\151\x65\x5f\x65\153\x73\164\162\141\x6b\x75\162\151\x6b\x75\x6c\145\x72"), "\x73\x69\x65\137\x75\160\x61\x63\x61\162\141" => $this->input->post("\163\x69\x65\x5f\165\160\x61\143\141\x72\141"), "\x73\x69\145\137\x6f\154\x61\150\162\x61\147\141" => $this->input->post("\x73\151\x65\137\157\x6c\x61\x68\x72\x61\x67\x61"), "\x73\151\145\137\153\145\x61\x67\141\155\x61\x61\156" => $this->input->post("\163\x69\x65\137\x6b\x65\141\x67\141\x6d\x61\x61\x6e"), "\x73\151\x65\x5f\x6b\x65\141\x6d\141\156\141\156" => $this->input->post("\x73\x69\x65\x5f\x6b\x65\141\x6d\x61\156\x61\x6e"), "\x73\x69\x65\137\153\x65\164\x65\162\x74\x69\142\x61\156" => $this->input->post("\x73\151\145\x5f\x6b\145\164\145\x72\x74\151\142\141\x6e"), "\x73\151\145\x5f\x6b\145\142\x65\162\x73\151\150\x61\x6e" => $this->input->post("\x73\x69\x65\137\x6b\145\142\x65\x72\x73\151\x68\x61\156"), "\x73\151\145\x5f\x6b\145\151\x6e\144\x61\x68\x61\156" => $this->input->post("\163\151\145\137\x6b\x65\151\x6e\x64\x61\x68\141\156"), "\163\x69\145\x5f\153\x65\163\x65\x68\x61\164\141\156" => $this->input->post("\x73\x69\145\x5f\x6b\x65\163\145\150\141\x74\x61\156"), "\163\151\x65\x5f\x6b\x65\x6b\145\x6c\x75\141\162\x67\141\x61\156" => $this->input->post("\163\x69\145\137\x6b\x65\x6b\x65\x6c\x75\x61\162\x67\141\x61\x6e"), "\x73\x69\145\x5f\x68\x75\155\141\x73" => $this->input->post("\x73\151\145\x5f\150\x75\155\141\163")]; goto XFtvj; XFtvj: $insert = $this->db->replace("\153\145\154\141\163\x5f\163\164\162\x75\x6b\164\165\162", $data); goto KA3bQ; KA3bQ: $this->output_json($insert); goto x9LIY; x9LIY: } }
