<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\105\x50\101\x54\110") or exit("\116\157\x20\144\x69\162\x65\x63\x74\40\x73\x63\x72\151\x70\164\40\x61\x63\x63\x65\163\x73\x20\x61\x6c\x6c\157\x77\145\144"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; class Datamapel extends CI_Controller { public function __construct() { goto rZHbx; bKpYX: OOLzP: goto f3U60; NSMQn: $this->load->model("\104\x72\157\160\x64\x6f\167\x6e\x5f\155\x6f\x64\145\154", "\144\162\x6f\x70\144\x6f\167\156"); goto M5hGu; e2XO5: $this->load->model("\104\141\x73\x68\x62\x6f\141\x72\144\137\155\157\144\145\x6c", "\144\141\x73\150\142\x6f\141\162\144"); goto NSMQn; GswXW: if (!$this->ion_auth->logged_in()) { goto OOLzP; } goto RQZoL; f3U60: redirect("\x61\165\x74\x68"); goto Ap3pS; NJ16N: CWtEB: goto d3l_5; RQZoL: if ($this->ion_auth->is_admin()) { goto CWtEB; } goto OoVYB; lhtL7: $this->load->dbforge(); goto NNKKY; SokbM: $this->load->model("\115\x61\163\164\145\x72\x5f\x6d\157\144\x65\x6c", "\x6d\x61\163\x74\x65\162"); goto e2XO5; M5hGu: $this->form_validation->set_error_delimiters('', ''); goto w57vB; d3l_5: goto gEHCF; goto bKpYX; rZHbx: parent::__construct(); goto GswXW; Ap3pS: gEHCF: goto lhtL7; OoVYB: show_error("\x48\x61\156\171\x61\40\x41\x64\155\x69\156\x69\163\x74\x72\x61\x74\x6f\x72\x20\x79\141\156\147\x20\144\x69\142\145\x72\x69\40\150\x61\153\40\x75\156\x74\x75\x6b\x20\x6d\145\x6e\x67\141\153\x73\x65\x73\x20\150\x61\x6c\141\x6d\141\156\x20\x69\156\151\54\x20\x3c\x61\x20\x68\162\145\x66\x3d\42" . base_url("\x64\x61\163\150\x62\x6f\x61\162\144") . "\42\76\x4b\x65\x6d\142\141\154\151\x20\x6b\145\x20\155\145\x6e\x75\40\x61\167\141\154\x3c\x2f\141\76", 403, "\101\x6b\163\145\x73\x20\x54\x65\x72\154\x61\x72\x61\x6e\x67"); goto NJ16N; NNKKY: $this->load->library(["\x64\141\164\x61\164\141\142\154\x65\163", "\146\157\162\x6d\x5f\x76\x61\x6c\151\144\141\164\x69\157\x6e"]); goto SokbM; w57vB: } public function output_json($data, $encode = true) { goto EfsVr; oLEPp: DVk3F: goto GLm1D; GLm1D: $this->output->set_content_type("\x61\x70\x70\154\151\143\141\164\x69\x6f\x6e\x2f\152\x73\x6f\156")->set_output($data); goto bHONY; M22fS: $data = json_encode($data); goto oLEPp; EfsVr: if (!$encode) { goto DVk3F; } goto M22fS; bHONY: } private function updateUrutanTampil() { goto GMwUA; AbFTi: $insert = []; goto D2wdF; vWFim: $this->db->update_batch("\155\x61\x73\x74\x65\162\137\x6d\141\160\145\x6c", $insert); goto VkTMh; GMwUA: $mapels = $this->db->select("\52")->from("\155\x61\x73\x74\145\162\137\x6d\141\160\x65\x6c")->get()->result(); goto AbFTi; VkTMh: l3lD9: goto dpg48; IghFZ: if (!(count($insert) > 0)) { goto l3lD9; } goto vWFim; D2wdF: foreach ($mapels as $mapel) { $insert = ["\151\144\x5f\x6d\141\160\x65\154" => $mapel->id_mapel, "\x6e\141\155\x61\x5f\155\x61\x70\x65\x6c" => $mapel->id_mapel, "\153\157\144\145" => $mapel->id_mapel, "\153\145\154\x6f\x6d\160\157\x6b" => $mapel->id_mapel, "\142\x6f\x62\157\164\137\x70" => $mapel->id_mapel, "\142\x6f\x62\157\164\x5f\x6b" => $mapel->id_mapel, "\152\145\x6e\x6a\141\x6e\147" => $mapel->id_mapel, "\x75\162\x75\164\141\x6e" => $mapel->id_mapel, "\x75\162\165\x74\x61\x6e\x5f\x74\141\x6d\160\151\x6c" => $mapel->id_mapel, "\163\164\x61\164\x75\163" => $mapel->id_mapel, "\144\x65\154\145\x74\x61\x62\154\x65" => $mapel->id_mapel]; uOBVQ: } goto zJWJA; zJWJA: SKiYN: goto IghFZ; dpg48: } public function index() { goto PkiVW; AwICL: $user = $this->ion_auth->user()->row(); goto d6_Wf; NfsEQ: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto dSFUN; rJTkY: $data["\x6b\x65\x6c\157\x6d\160\157\x6b"] = $this->dropdown->getDataKelompokMapel(); goto HwIg8; QWQmA: $data["\153\141\164\x65\x67\x6f\x72\151"] = ["\127\x41\112\111\102", "\x50\x41\111\40\x28\x4b\x65\x6d\x65\156\141\x67\x29", "\120\105\x4d\111\116\101\124\x41\116\x20\101\113\101\104\105\x4d\111\x4b", "\x41\x4b\x41\x44\105\115\111\x4b\x20\x4b\x45\112\125\122\125\101\116", "\x4c\x49\x4e\124\101\x53\x20\x4d\111\x4e\x41\124", "\x4d\125\114\x4f\x4b"]; goto Nf4xX; wOggP: $data["\164\x70"] = $this->dashboard->getTahun(); goto cxFaz; PkiVW: if ($this->db->field_exists("\x75\162\x75\164\141\156\137\164\x61\155\x70\x69\154", "\155\x61\163\x74\145\162\137\x6d\x61\160\x65\154")) { goto yN2YJ; } goto nrNFk; dSFUN: $data["\x73\155\164\x5f\141\x63\x74\x69\166\145"] = $this->dashboard->getSemesterActive(); goto QWQmA; HwIg8: $data["\x73\x74\x61\x74\165\x73"] = ["\116\157\x6e\x61\x6b\x74\x69\x66", "\x41\x6b\164\151\x66"]; goto bqxc4; znzLi: $this->load->view("\155\x61\x73\x74\145\162\x2f\x6d\x61\160\x65\x6c\57\x64\x61\x74\141"); goto qsLmH; PztgW: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\x64\165\154" => "\115\x61\164\141\40\120\145\154\141\x6a\x61\162\141\x6e", "\163\x75\142\x6a\x75\x64\x75\x6c" => "\104\141\x66\x74\x61\162\x20\115\x61\164\141\40\120\145\x6c\x61\152\141\162\141\x6e", "\160\162\157\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\151\x6e\147" => $setting]; goto wOggP; nrNFk: $fields = array("\x75\162\165\164\x61\156\x5f\164\141\155\160\151\154" => array("\164\171\160\145" => "\x69\156\x74\x28\x33\51", "\141\146\164\145\162" => "\x75\162\x75\x74\x61\156")); goto XF9UD; bKRaI: $this->load->view("\137\164\x65\x6d\160\154\x61\164\145\x73\57\x64\141\x73\150\x62\x6f\x61\162\144\x2f\x5f\150\145\x61\x64\145\x72", $data); goto znzLi; qsLmH: $this->load->view("\137\164\145\155\160\x6c\141\164\x65\x73\57\x64\141\x73\x68\x62\x6f\x61\162\144\57\137\146\x6f\157\164\145\162"); goto YIcfH; GX9LB: $data["\x73\165\x62\x5f\153\145\154\x6f\155\x70\x6f\153\137\x6d\141\160\x65\x6c"] = $this->master->getDataSubKelompokMapel(); goto rJTkY; bqxc4: $data["\155\141\x70\145\x6c\137\156\157\156\x5f\141\153\164\151\x66"] = $this->master->getAllMapelNonAktif($setting->jenjang); goto bKRaI; cxFaz: $data["\x74\160\137\x61\143\164\x69\x76\x65"] = $this->dashboard->getTahunActive(); goto NfsEQ; d6_Wf: $setting = $this->dashboard->getSetting(); goto PztgW; XF9UD: $this->dbforge->add_column("\x6d\x61\163\x74\x65\x72\x5f\x6d\x61\160\145\154", $fields); goto ZO34B; Nf4xX: $data["\x6b\145\x6c\157\x6d\x70\157\x6b\137\x6d\x61\x70\x65\x6c"] = $this->master->getDataKelompokMapel(); goto GX9LB; ZO34B: yN2YJ: goto AwICL; YIcfH: } public function addKelompokMapel() { goto nJcDS; zKyP3: $data = $this->db->update("\x6d\141\163\164\145\x72\x5f\x6b\x65\154\x6f\155\160\157\x6b\137\x6d\x61\x70\145\154", $insert); goto BaCps; HLPO3: NpLox: goto YUY5z; gVuqi: $data = $this->master->create("\x6d\x61\163\164\x65\x72\137\x6b\x65\x6c\157\x6d\x70\x6f\153\x5f\x6d\x61\160\145\x6c", $insert); goto oHu06; BaCps: NXG5E: goto IulEu; IulEu: $this->output->set_content_type("\141\160\x70\154\x69\143\x61\164\x69\157\x6e\57\x6a\163\157\156")->set_output($data); goto PKG9U; YUY5z: $this->db->where("\151\144\x5f\153\x65\154\137\x6d\x61\x70\x65\x6c", $id); goto zKyP3; oHu06: goto NXG5E; goto HLPO3; aWSCn: $insert = ["\156\141\155\x61\x5f\153\x65\154\x5f\155\141\160\145\154" => $this->input->post("\x6e\141\155\141\137\x6b\x65\x6c\137\x6d\141\160\145\154", true), "\153\x6f\144\145\x5f\153\x65\x6c\137\x6d\x61\160\x65\x6c" => $this->input->post("\x6b\x6f\144\x65\x5f\153\x65\154\x5f\155\x61\x70\145\154", true), "\153\x61\x74\x65\147\x6f\162\151" => $this->input->post("\x6b\x61\164\x65\147\157\x72\x69", true), "\151\144\137\x70\141\x72\145\x6e\164" => $this->input->post("\x69\144\137\x70\x61\x72\145\x6e\x74", true)]; goto BqqWh; nJcDS: $id = $this->input->post("\151\144\x5f\x6b\145\154\x5f\x6d\x61\160\x65\x6c"); goto aWSCn; BqqWh: if ($id != null) { goto NpLox; } goto gVuqi; PKG9U: } public function hapusKelompok() { goto MZeS7; jvEc8: if (!$this->master->delete("\x6d\x61\163\x74\145\162\137\153\x65\x6c\157\155\x70\157\153\x5f\x6d\141\x70\x65\154", $id, "\x69\x64\137\153\x65\154\x5f\x6d\141\160\145\154")) { goto i4hac; } goto mPrYk; ZLnVv: fjo21: goto QuKDF; z1sxx: if (!($numm > 0)) { goto fjo21; } goto AtXBE; XFwUF: $messages = []; goto qktvD; mPrYk: $this->output_json(["\x73\164\141\x74\x75\163" => true, "\x6d\145\163\x73\141\147\145" => "\x62\145\x72\x68\x61\x73\151\x6c"]); goto Hzsh5; VtHsw: mh2N0: goto ZgBE2; qktvD: $this->db->where_in("\x6b\x65\x6c\x6f\155\x70\157\x6b", $kode); goto VazJZ; crfr8: $nums = $this->db->count_all_results("\x6d\141\x73\164\145\x72\x5f\x6b\x65\x6c\157\155\160\x6f\153\137\155\141\x70\145\x6c"); goto qF1IH; XxUWe: goto mh2N0; goto Xen75; MZeS7: $id = $this->input->post("\151\144\137\x6b\145\x6c"); goto O1Tqb; ovWao: if (count($messages) > 0) { goto H0arl; } goto jvEc8; O1Tqb: $kode = $this->input->post("\x6b\157\144\145"); goto lPwCz; Hzsh5: i4hac: goto XxUWe; qF1IH: if (!($nums > 0)) { goto QGtp6; } goto C9gt3; F6yBj: $this->output_json(["\163\164\x61\x74\165\x73" => false, "\x6d\x65\163\x73\141\x67\x65" => "\113\145\154\157\x6d\160\x6f\153\x20\115\x61\160\145\x6c\40\144\151\x67\x75\x6e\141\x6b\x61\156\40\x64\151\x20" . count($messages) . "\x20\x74\141\x62\145\x6c\x3a\x3c\142\x72\76" . implode("\x3c\x62\162\76", $messages)]); goto VtHsw; AtXBE: array_push($messages, "\x4d\141\x74\141\40\120\x65\154\x61\x6a\x61\162\x61\x6e"); goto ZLnVv; PPd6N: QGtp6: goto ovWao; Xen75: H0arl: goto F6yBj; QuKDF: $this->db->where_in("\x69\x64\137\160\x61\x72\145\156\164", $id); goto crfr8; lPwCz: $id_parent = $this->input->post("\151\144\x5f\160\x61\162\x65\x6e\164"); goto XFwUF; VazJZ: $numm = $this->db->count_all_results("\x6d\x61\163\x74\145\x72\137\x6d\141\x70\x65\x6c"); goto z1sxx; C9gt3: array_push($messages, "\123\165\x62\40\x4b\x65\154\157\x6d\x70\x6f\153"); goto PPd6N; ZgBE2: } public function create() { goto ZYQXo; y1f07: $insert = ["\156\141\x6d\x61\137\x6d\141\x70\x65\154" => $this->input->post("\x6e\x61\155\x61\137\155\x61\160\x65\x6c", true), "\x6b\x6f\144\x65" => $this->input->post("\x6b\157\144\x65\137\155\141\160\145\x6c", true), "\x6b\145\x6c\157\x6d\x70\x6f\x6b" => $this->input->post("\153\x65\154\x6f\x6d\x70\157\153", true), "\165\x72\x75\164\141\156\x5f\x74\141\x6d\160\x69\154" => $this->input->post("\165\x72\x75\164\141\156\137\164\x61\155\x70\x69\154", true), "\152\x65\x6e\x6a\141\156\x67" => $setting->jenjang]; goto Ssbhk; xInAH: $this->output->set_content_type("\x61\x70\160\154\151\x63\x61\x74\151\x6f\x6e\57\x6a\163\157\x6e")->set_output($data); goto gvmc5; ZYQXo: $setting = $this->dashboard->getSetting(); goto y1f07; Ssbhk: $data = $this->master->create("\x6d\x61\x73\164\145\162\x5f\x6d\141\x70\x65\154", $insert); goto xInAH; gvmc5: } public function getDataKelompok() { goto shh0K; vQPel: $this->db->order_by("\x6b\157\x64\x65\137\153\x65\154\x5f\155\x61\x70\x65\154"); goto GhDDP; shh0K: $this->datatables->select("\52"); goto IKS5P; Sc941: $this->datatables->where("\151\144\x5f\160\x61\x72\145\x6e\164", "\60"); goto vQPel; GhDDP: echo $this->datatables->generate(); goto buL4M; IKS5P: $this->datatables->from("\155\141\163\164\145\x72\x5f\153\145\154\157\155\x70\157\153\x5f\155\x61\x70\145\154"); goto Sc941; buL4M: } public function getDataSubKelompok() { goto Bzu1w; Bzu1w: $this->datatables->select("\x2a"); goto YQw5f; YQw5f: $this->datatables->from("\155\x61\x73\x74\145\x72\x5f\153\x65\154\157\155\160\x6f\153\x5f\x6d\x61\x70\x65\154"); goto k1UVx; k1UVx: $this->datatables->where("\x69\144\x5f\160\x61\x72\x65\156\164\40\x3c\x3e\x20\60"); goto hOv5k; xLSUL: echo $this->datatables->generate(); goto SSwiH; hOv5k: $this->db->order_by("\153\x6f\x64\x65\137\153\145\154\137\155\x61\160\x65\x6c"); goto xLSUL; SSwiH: } public function read() { goto LQgVh; xZ6Pn: $this->db->order_by("\x75\x72\165\x74\141\156\x5f\x74\x61\x6d\160\151\x6c"); goto mkRj5; LQgVh: $setting = $this->dashboard->getSetting(); goto VnYXH; SwFyz: $this->datatables->from("\155\x61\x73\164\x65\162\x5f\x6d\141\x70\145\x6c"); goto Rb2PQ; mkRj5: echo $this->datatables->generate(); goto Rz6TH; VnYXH: $this->datatables->select("\x69\144\x5f\x6d\141\x70\145\154\54\40\x75\162\x75\164\x61\x6e\137\x74\x61\x6d\x70\151\x6c\x2c\x20\156\x61\155\x61\x5f\x6d\141\x70\145\x6c\x2c\x20\x6b\x6f\x64\x65\54\40\153\x65\x6c\157\155\x70\157\153\x2c\x20\x64\x65\x6c\x65\164\141\x62\x6c\x65\54\x20\x73\164\141\x74\x75\x73"); goto SwFyz; Rb2PQ: $this->db->order_by("\x6b\145\x6c\x6f\155\160\157\153"); goto xZ6Pn; Rz6TH: } public function update() { $data = $this->master->updateMapel(); $this->output->set_content_type("\x61\160\x70\x6c\151\x63\x61\x74\151\x6f\x6e\57\152\x73\157\156")->set_output($data); } public function aktifkan($id) { goto oxtMy; L1Tkw: $update = $this->db->update("\x6d\x61\x73\164\145\162\x5f\x6d\x61\x70\x65\154"); goto wsTzE; wsTzE: $this->output_json($update); goto sump6; oxtMy: $this->db->set("\163\164\x61\x74\x75\163", "\61"); goto rCKi6; rCKi6: $this->db->where("\151\x64\137\x6d\141\160\x65\154", $id); goto L1Tkw; sump6: } public function delete() { goto JQlHx; uxhNN: ZOJuy: goto lW7gH; Au3D4: eZbpH: goto t3OPX; PnZhl: goto weXDp; goto uxhNN; FmZSj: if (!$chk) { goto UzHFE; } goto RbTiS; nZeZz: UzHFE: goto UyoK3; AMLKR: foreach ($tables as $table) { goto guNZF; vo3hs: goto lEwys; goto rDi9y; yKztw: array_push($messages, $table); goto z6QhR; rDi9y: xBWYu: goto pN355; nd8fZ: r9qGn: goto oZjsb; rCmD8: $this->db->where_in("\x69\144\137\x6d\141\x70\145\x6c", $chk); goto utdNP; cxoL5: $num = $this->db->count_all_results($table); goto Du1sG; guNZF: if (!($table != "\155\x61\163\x74\x65\162\x5f\x6d\x61\x70\145\154")) { goto Jqyr6; } goto zjiW8; vncqZ: if (!($num > 0)) { goto xG4d2; } goto yKztw; z6QhR: xG4d2: goto YK_9A; zjiW8: if ($table == "\143\x62\x74\137\163\x6f\141\x6c") { goto xBWYu; } goto rCmD8; YK_9A: Jqyr6: goto nd8fZ; pN355: $this->db->where_in("\155\x61\160\x65\154\x5f\151\x64", $chk); goto cxoL5; utdNP: $num = $this->db->count_all_results($table); goto vo3hs; Du1sG: lEwys: goto vncqZ; oZjsb: } goto Au3D4; xoOn6: dLEse: goto K97zG; JQlHx: $chk = $this->input->post("\x63\150\145\x63\153\145\144", true); goto FmZSj; t3OPX: if (count($messages) > 0) { goto ZOJuy; } goto MDA_u; Q_tEB: foreach ($tabless as $table) { goto tpjUK; m_fob: ud0Dy: goto kz6HT; kFysC: foreach ($fields as $field) { goto ENo71; ENo71: if (!($field->name == "\x69\144\137\x6d\x61\x70\x65\x6c" || $field->name == "\155\141\160\145\x6c\x5f\x69\x64")) { goto q60oz; } goto sBc8O; KTuCZ: q60oz: goto EmCoN; EmCoN: FWbMi: goto HoKdr; sBc8O: array_push($tables, $table); goto KTuCZ; HoKdr: } goto Sd5og; tpjUK: $fields = $this->db->field_data($table); goto kFysC; Sd5og: a8V4_: goto m_fob; kz6HT: } goto ai9Xg; lW7gH: $this->output_json(["\x73\164\x61\x74\x75\x73" => false, "\x74\x6f\164\141\154" => "\115\x61\x70\x65\x6c\40\x64\151\x67\165\x6e\141\x6b\x61\156\40\144\151\40" . count($messages) . "\40\164\141\142\145\x6c\72\74\142\162\x3e" . implode("\74\x62\x72\x3e", $messages)]); goto Xp7yu; RbTiS: $messages = []; goto bWtLr; UyoK3: $this->output_json(["\163\164\x61\164\165\x73" => false, "\164\x6f\x74\141\154" => "\124\x69\x64\x61\x6b\x20\141\x64\141\x20\x64\x61\x74\x61\40\x79\141\x6e\x67\40\144\151\x70\x69\154\x69\x68\x21"]); goto xoOn6; UhQob: goto dLEse; goto nZeZz; QnYbx: jq14x: goto PnZhl; Xp7yu: weXDp: goto UhQob; bWtLr: $tables = []; goto aM9Cf; ai9Xg: HzP_N: goto AMLKR; MDA_u: if (!$this->master->delete("\x6d\x61\163\164\x65\x72\137\x6d\x61\160\x65\x6c", $chk, "\x69\x64\x5f\x6d\x61\160\x65\154")) { goto jq14x; } goto WLxno; WLxno: $this->output_json(["\163\164\x61\164\165\x73" => true, "\164\157\x74\141\x6c" => count($chk)]); goto QnYbx; aM9Cf: $tabless = $this->db->list_tables(); goto Q_tEB; K97zG: } public function import($import_data = null) { goto MO3zl; MO3zl: $user = $this->ion_auth->user()->row(); goto RiQZD; RiQZD: $data = ["\165\163\x65\x72" => $user, "\152\165\x64\x75\154" => "\x4d\141\x74\x61\40\120\145\154\141\x6a\x61\x72\x61\x6e", "\x73\x75\x62\x6a\165\144\x75\x6c" => "\x49\x6d\160\157\x72\x74\40\x4d\x61\164\141\40\120\145\154\141\152\x61\162\141\156", "\x70\162\x6f\x66\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\151\156\x67" => $this->dashboard->getSetting()]; goto kS_ol; kS_ol: if (!($import_data != null)) { goto bC_66; } goto ORg4V; OtaTj: $data["\164\160"] = $this->dashboard->getTahun(); goto Opybk; ORg4V: $data["\151\155\x70\x6f\x72\164"] = $import_data; goto yQt5X; rryOZ: $this->load->view("\x6d\141\x73\164\145\x72\x2f\x6d\x61\160\x65\154\57\151\155\x70\x6f\162\164"); goto Ikunq; ggooa: $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\164\x65\163\57\x64\x61\163\x68\142\x6f\141\x72\x64\x2f\137\150\x65\x61\144\145\x72", $data); goto rryOZ; SjSXi: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto HfqRq; yQt5X: bC_66: goto OtaTj; Ikunq: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\x73\x2f\144\141\x73\150\x62\x6f\141\162\x64\x2f\137\146\x6f\157\164\145\162"); goto poBjr; HfqRq: $data["\x73\x6d\164\137\141\143\x74\151\x76\145"] = $this->dashboard->getSemesterActive(); goto ggooa; Opybk: $data["\x74\160\x5f\141\143\x74\x69\166\x65"] = $this->dashboard->getTahunActive(); goto SjSXi; poBjr: } public function previewExcel() { goto Fnm6V; AD8_G: h7hRr: goto t6lSv; FNSRF: if (!$this->upload->do_upload("\x75\160\154\157\141\144\x5f\146\x69\154\x65")) { goto MT86R; } goto wWykk; T7kwe: if (!($sheetData[$i][1] != null)) { goto PaLkR; } goto D2gqP; xE5eH: $spreadsheet = $reader->load($file); goto mhw62; fltlw: $this->load->library("\x75\x70\154\157\141\x64", $config); goto FNSRF; ozKHm: $config["\141\x6c\154\x6f\167\x65\144\x5f\x74\x79\x70\145\x73"] = "\170\x6c\x73\x7c\170\x6c\163\x78\x7c\x63\163\166"; goto BrliN; nk0w5: goto zP7SR; goto k_B7P; W0aNE: PaLkR: goto r7fea; B1D2V: $ext = $this->upload->data("\146\151\x6c\145\137\x65\x78\x74"); goto NQ8Ay; k_B7P: MT86R: goto dBXSX; rE6Jt: zsLll: goto OYCjx; NQ8Ay: switch ($ext) { case "\56\170\154\x73\x78": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); goto AeMol; case "\x2e\x78\154\163": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); goto AeMol; case "\x2e\143\163\x76": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); goto AeMol; default: echo "\165\x6e\x6b\x6e\x6f\167\x6e\x20\x66\151\154\x65\x20\145\x78\164"; die; } goto AD8_G; XHu94: echo json_encode($data); goto nk0w5; t6lSv: AeMol: goto xE5eH; ioXy7: goto zsLll; goto BVss0; mhw62: $sheetData = $spreadsheet->getActiveSheet()->toArray(); goto tZ24p; h2Et9: $i++; goto ioXy7; pMQq8: unlink($file); goto XHu94; BrliN: $config["\x6d\141\x78\x5f\x73\151\172\x65"] = 2048; goto f1X02; gjydH: die; goto rwwkk; OYCjx: if (!($i < count($sheetData))) { goto e9q81; } goto T7kwe; Fnm6V: $config["\x75\x70\x6c\x6f\x61\144\x5f\x70\141\164\x68"] = "\56\x2f\x75\160\154\x6f\141\x64\163\57\151\x6d\160\157\x72\x74\x2f"; goto ozKHm; dBXSX: $error = $this->upload->display_errors(); goto KTMEj; k1fdu: $i = 1; goto rE6Jt; D2gqP: $data[] = ["\156\141\x6d\141" => $sheetData[$i][1], "\x6b\x6f\x64\x65" => $sheetData[$i][2]]; goto W0aNE; r7fea: Jn1pW: goto h2Et9; rwwkk: zP7SR: goto Y0LY0; KTMEj: echo $error; goto gjydH; wWykk: $file = $this->upload->data("\146\x75\154\154\137\160\x61\164\x68"); goto B1D2V; tZ24p: $data = []; goto k1fdu; BVss0: e9q81: goto pMQq8; f1X02: $config["\145\x6e\143\162\x79\160\x74\x5f\156\141\x6d\145"] = true; goto fltlw; Y0LY0: } public function previewWord() { goto UWpFa; FRj10: echo json_encode($data); goto PdHH4; RmnKF: $error = $this->upload->display_errors(); goto mTRDl; AJN7f: kdpV2: goto D07nu; Fiawa: $this->load->library("\165\160\x6c\157\141\x64", $config); goto H8fKm; Q3o8I: $config["\155\x61\170\137\x73\151\x7a\x65"] = 2048; goto xq9pA; u5KKe: FULNv: goto Hw2sl; zLLd_: NnCvI: goto rvfoA; Hw2sl: $i++; goto cQOGY; RQDSf: $config["\141\x6c\x6c\157\x77\145\x64\x5f\x74\x79\x70\145\163"] = "\x64\157\143\170"; goto Q3o8I; H8fKm: if (!$this->upload->do_upload("\x75\160\x6c\157\x61\x64\x5f\146\151\x6c\145")) { goto e7Msk; } goto c6O55; c6O55: $file = $this->upload->data("\146\x75\154\154\137\160\141\x74\x68"); goto Gpacm; G7cNK: $dom->loadHTML($text); goto OrmqG; mTRDl: echo $error; goto zdu9w; z45cM: XWUtB: goto FRj10; ndy8O: $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord); goto P8tVZ; D07nu: if (!($i < $rows->count())) { goto XWUtB; } goto cSNb2; yiQjk: $i = 1; goto AJN7f; PdHH4: goto NnCvI; goto EEvRW; F0N9n: $data[] = ["\x6e\141\x6d\x61" => $cols->item(1)->nodeValue, "\153\x6f\x64\145" => $cols->item(2)->nodeValue]; goto u5KKe; EEvRW: e7Msk: goto RmnKF; Gpacm: $phpWord = \PhpOffice\PhpWord\IOFactory::load($file); goto ndy8O; xq9pA: $config["\145\156\143\x72\171\x70\x74\x5f\x6e\141\155\x65"] = true; goto Fiawa; cQOGY: goto kdpV2; goto z45cM; PVU86: $tables = $dom->getElementsByTagName("\x74\x61\x62\154\145"); goto pQ3rJ; OrmqG: $data = []; goto GVxxU; P8tVZ: try { $htmlWriter->save("\x2e\x2f\165\160\154\x6f\141\x64\163\x2f\164\145\155\160\x2f\x64\x6f\x63\56\150\164\155\154"); } catch (\PhpOffice\PhpWord\Exception\Exception $e) { } goto Pipxy; cSNb2: $cols = $rows[$i]->getElementsByTagName("\x74\144"); goto F0N9n; UWpFa: $config["\165\x70\x6c\157\141\x64\137\x70\x61\164\150"] = "\56\x2f\x75\160\154\157\141\x64\x73\57\151\155\x70\x6f\x72\164\57"; goto RQDSf; pQ3rJ: $rows = $tables->item(0)->getElementsByTagName("\x74\x72"); goto yiQjk; sKUbN: $text = file_get_contents("\x2e\57\165\160\x6c\x6f\x61\144\163\57\164\x65\x6d\x70\57\144\157\x63\56\150\164\155\154"); goto RkuhX; zdu9w: die; goto zLLd_; GVxxU: $dom->preserveWhiteSpace = false; goto PVU86; Pipxy: unlink($file); goto sKUbN; RkuhX: $dom = new DOMDocument(); goto G7cNK; rvfoA: } public function do_import() { goto oxExj; oxExj: $data = json_decode($this->input->post("\155\x61\160\145\154", true)); goto h_Huc; EPK_X: JUTYq: goto pNofg; QB91r: foreach ($data as $j) { $mapel[] = ["\x6e\x61\155\141\137\155\x61\x70\145\154" => $j->nama, "\x6b\157\x64\145" => $j->kode]; HwDgN: } goto EPK_X; h_Huc: $mapel = []; goto QB91r; QUncP: $this->output->set_content_type("\141\x70\160\x6c\151\x63\x61\x74\151\x6f\x6e\57\152\163\157\156")->set_output($save); goto BXq4c; pNofg: $save = $this->master->create("\155\141\x73\x74\145\162\x5f\155\x61\160\145\154", $mapel, true); goto QUncP; BXq4c: } }
