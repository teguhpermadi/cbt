<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\x50\x41\x54\x48") or exit("\116\x6f\40\x64\151\162\x65\143\x74\x20\x73\143\162\151\x70\x74\x20\141\x63\x63\145\163\x73\40\x61\154\x6c\157\x77\145\144"); class Usersiswa extends CI_Controller { public function __construct() { goto SSkRX; SSkRX: parent::__construct(); goto q6vm3; Q1a__: $this->load->model("\x4d\x61\163\164\x65\162\x5f\155\x6f\x64\x65\x6c", "\x6d\x61\163\x74\x65\x72"); goto e3TtE; BMUHc: redirect("\x61\165\164\x68"); goto pWs1J; pWs1J: rQfet: goto RdO_a; RdO_a: $this->load->library(["\144\141\164\141\164\x61\x62\x6c\145\163", "\146\x6f\x72\x6d\x5f\x76\x61\154\x69\144\x61\164\151\x6f\156"]); goto kvFw0; e3TtE: $this->load->model("\x44\141\x73\x68\x62\x6f\141\162\144\x5f\155\x6f\144\145\154", "\144\141\163\x68\x62\x6f\141\162\x64"); goto Rj7Uj; Rj7Uj: $this->form_validation->set_error_delimiters('', ''); goto kCR0h; q6vm3: if ($this->ion_auth->logged_in()) { goto rQfet; } goto BMUHc; kvFw0: $this->load->model("\125\x73\145\162\x73\x5f\155\x6f\x64\x65\154", "\165\163\145\162\163"); goto Q1a__; kCR0h: } public function is_has_access() { goto mIqzf; bg9ls: show_error("\110\x61\x6e\171\141\x20\x41\x64\x6d\151\x6e\151\x73\x74\162\141\164\157\162\40\171\141\156\x67\x20\144\151\142\145\x72\151\40\x68\x61\x6b\x20\x75\x6e\164\x75\153\40\x6d\x65\x6e\147\141\153\x73\145\x73\40\150\141\154\x61\x6d\x61\x6e\x20\x69\156\x69\54\x20\x3c\x61\x20\x68\162\x65\146\75\42" . base_url("\144\141\x73\150\142\157\x61\162\144") . "\42\76\x4b\x65\155\x62\141\x6c\x69\40\x6b\145\40\x6d\145\156\x75\40\x61\167\x61\x6c\x3c\x2f\141\x3e", 403, "\101\x6b\163\145\x73\x20\124\145\x72\x6c\x61\162\141\156\x67"); goto FvHu_; S9xO3: $group = $this->ion_auth->get_users_groups($user_id)->row()->name; goto t7rXP; FvHu_: azlB1: goto SW_n0; mIqzf: $user_id = $this->ion_auth->user()->row()->id; goto S9xO3; t7rXP: if (!(!$group === "\x61\144\155\x69\x6e" or !$group === "\147\x75\162\165")) { goto azlB1; } goto bg9ls; SW_n0: } public function output_json($data, $encode = true) { goto leRo6; leRo6: if (!$encode) { goto wMWop; } goto nOKQM; nOKQM: $data = json_encode($data); goto PbF3m; Ubbnm: $this->output->set_content_type("\141\160\x70\x6c\151\143\x61\164\x69\x6f\x6e\57\x6a\x73\x6f\156")->set_output($data); goto jpu6L; PbF3m: wMWop: goto Ubbnm; jpu6L: } public function data() { goto kQ1A_; Ef12t: $smt = $this->dashboard->getSemesterActive(); goto WboI9; WboI9: $this->output_json($this->users->getUserSiswa($tp->id_tp, $smt->id_smt), false); goto GTz1x; kQ1A_: $this->is_has_access(); goto l_yd4; l_yd4: $tp = $this->dashboard->getTahunActive(); goto Ef12t; GTz1x: } public function index() { goto fy7ho; tcZmJ: $data["\164\x70"] = $this->dashboard->getTahun(); goto JcMfK; JcMfK: $data["\x74\160\137\x61\143\x74\x69\x76\145"] = $this->dashboard->getTahunActive(); goto kkR9e; lHIXN: $this->load->view("\x5f\164\145\155\160\x6c\x61\x74\x65\163\57\x64\x61\163\150\x62\x6f\141\x72\144\x2f\x5f\146\157\157\x74\x65\x72"); goto P1D9u; bQTya: $this->load->view("\x5f\x74\x65\x6d\x70\x6c\x61\164\x65\x73\x2f\x64\141\x73\150\142\x6f\141\x72\x64\x2f\137\150\x65\141\x64\145\162", $data); goto Iu26Y; Iu26Y: $this->load->view("\x75\163\145\162\x73\x2f\x73\x69\163\167\141\x2f\144\141\x74\x61"); goto lHIXN; kkR9e: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto InbH_; hHvBN: $data = ["\165\163\145\x72" => $user, "\x6a\165\144\165\x6c" => "\125\163\x65\x72\x20\x4d\x61\x6e\x61\x67\145\155\x65\156\x74", "\x73\x75\142\x6a\x75\144\165\154" => "\x44\x61\164\141\x20\x55\163\x65\x72\40\x53\151\x73\167\x61", "\160\162\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto tcZmJ; fy7ho: $this->is_has_access(); goto pL7xG; pL7xG: $user = $this->ion_auth->user()->row(); goto hHvBN; InbH_: $data["\x73\155\x74\137\x61\x63\x74\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto bQTya; P1D9u: } public function list() { goto LlX4i; Sh6IN: $data = ["\154\151\163\x74\x73" => $lists, "\x74\157\164\x61\x6c" => $count_siswa, "\160\141\x67\145\163" => ceil($count_siswa / $limit), "\163\x65\x61\162\x63\x68" => $search, "\160\145\x72\160\x61\x67\145" => $limit]; goto VlHsG; LlX4i: $page = $this->input->post("\160\141\x67\x65", true); goto OxXfT; pUd2Z: $lists = $this->users->getUserSiswaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search); goto Sh6IN; tmmHl: $tp = $this->dashboard->getTahunActive(); goto xOUZf; OxXfT: $limit = $this->input->post("\x6c\151\155\x69\x74", true); goto VRBRK; VlHsG: $this->output_json($data); goto gJPAP; k00vC: $offset = ($page - 1) * $limit; goto tmmHl; VRBRK: $search = $this->input->post("\x73\145\141\162\143\150", true); goto k00vC; FZ2mq: $count_siswa = $this->users->getUserSiswaTotalPage($search); goto pUd2Z; xOUZf: $smt = $this->dashboard->getSemesterActive(); goto FZ2mq; gJPAP: } private function registerSiswa($username, $password, $email, $additional_data, $group) { goto VaDxy; C4jyL: $data["\163\164\141\164\165\x73"] = true; goto tt9ku; VaDxy: $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto C4jyL; kXkSd: if (!($reg == false)) { goto r9fJA; } goto PyVNj; i4PHR: return $data; goto SNVmz; Oo7uZ: r9fJA: goto i4PHR; tt9ku: $data["\151\x64"] = $reg; goto kXkSd; PyVNj: $data["\x73\164\x61\x74\x75\x73"] = false; goto Oo7uZ; SNVmz: } public function activate($id) { goto c2aMj; K6kcQ: $data = ["\163\x74\x61\164\x75\x73" => false, "\x6d\163\147" => "\x41\153\165\x6e\x20\163\151\163\167\141\x20\x74\151\144\141\x6b\40\164\x65\162\x73\145\144\151\x61\40\50\163\x75\x64\141\x68\x20\x64\x69\147\165\x6e\141\x6b\141\156\x29\56"]; goto WTuoV; ojpnq: if ($deleted) { goto y6bmy; } goto K6kcQ; BVr01: $username = trim($siswa->username); goto PUe8V; ra06f: $additional_data = ["\146\x69\x72\163\164\137\156\141\155\145" => $first_name, "\154\x61\x73\x74\137\156\141\155\145" => $last_name]; goto TbFM8; WTuoV: goto s_cDs; goto FQjLJ; h1G8o: $user_siswa = $this->db->get_where("\165\163\145\162\x73", "\145\155\x61\x69\x6c\x3d\x22" . $email . "\x22")->row(); goto Dk12I; OdEdD: s_cDs: goto GsWUf; c2aMj: $siswa = $this->users->getDataSiswa($id); goto L5zU4; ddJZL: $deleted = $this->ion_auth->delete_user($user_siswa->id); goto BadHO; treTF: if (!($user_siswa != null)) { goto ksMez; } goto ddJZL; TbFM8: $group = array("\x33"); goto h1G8o; hae0n: $data = ["\163\x74\x61\164\x75\163" => $reg, "\x6d\x73\x67" => !$reg ? "\x41\x6b\165\156\40" . $siswa->nama . "\x20\147\141\147\141\154\x20\x64\x69\141\153\x74\151\x66\153\x61\156\x2e" : "\x41\x6b\x75\x6e\x20" . $siswa->nama . "\x20\x64\x69\x61\x6b\x74\x69\x66\153\141\x6e\x2e"]; goto OdEdD; GsWUf: $this->output_json($data); goto gU32r; L5zU4: $nama = explode("\x20", $siswa->nama); goto M1HgF; JkAJi: $last_name = end($nama); goto BVr01; BadHO: ksMez: goto ojpnq; PUe8V: $password = trim($siswa->password); goto X_HC1; olwit: $reg = $this->registerSiswa($username, $password, $email, $additional_data, $group); goto hae0n; FQjLJ: y6bmy: goto olwit; M1HgF: $first_name = $nama[0]; goto JkAJi; Dk12I: $deleted = true; goto treTF; X_HC1: $email = $siswa->nis . "\100\163\x69\163\167\141\56\143\157\x6d"; goto ra06f; gU32r: } public function deactivate($id, $nama) { goto vVbFy; U1eo4: a3ZuM: goto iU2dL; RinxZ: bXihf: goto yrWJd; aXB4B: $this->output_json($data, true); goto rpN6i; aF4Z2: $deleted = $this->ion_auth->delete_user($id); goto vxwSc; JRX0K: if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) { goto mFfT3; } goto iGNgD; uKqaj: $id = (int) $id; goto JRX0K; iU2dL: $data = ["\163\164\x61\164\165\x73" => false, "\x6d\163\x67" => "\131\157\x75\x20\x6d\x75\163\164\x20\x62\145\40\x61\156\40\141\x64\155\151\156\x69\163\164\162\141\x74\157\162\40\164\157\x20\166\151\x65\167\x20\164\x68\x69\163\x20\160\141\x67\145\x2e"]; goto LSwgM; ydczK: goto bXihf; goto F16bM; LSwgM: j32RF: goto aXB4B; yrWJd: goto j32RF; goto U1eo4; vxwSc: $data = ["\163\164\141\164\x75\163" => $deleted, "\155\163\x67" => $deleted ? "\123\x69\x73\167\141\40" . urldecode($nama) . "\40\x64\151\x6e\157\x6e\141\x6b\164\x69\x66\153\141\x6e\x2e" : "\x53\151\x73\x77\x61\40" . urldecode($nama) . "\x20\147\141\147\141\154\40\x64\x69\x6e\x6f\x6e\141\153\x74\x69\x66\153\141\x6e\x2e"]; goto RinxZ; F16bM: mFfT3: goto aF4Z2; vVbFy: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto a3ZuM; } goto uKqaj; iGNgD: $data = ["\163\164\141\x74\x75\163" => false, "\155\163\147" => "\101\156\144\141\40\x62\x75\153\141\x6e\40\141\144\x6d\x69\x6e\x2e"]; goto ydczK; rpN6i: } public function aktifkanSemua() { goto wZC_N; KehZm: pi4un: goto vNG4F; wZC_N: $ids = $this->input->post("\151\x64\163", true); goto ryOLG; uSi1e: $jum = 0; goto FjPYl; vNG4F: $data = ["\163\164\x61\164\165\163" => true, "\152\165\x6d\154\141\x68" => $jum, "\x6d\163\147" => $jum . "\40\163\151\163\167\x61\40\144\151\x61\153\164\x69\146\x6b\141\156\56"]; goto egaas; FjPYl: foreach ($siswaAktif as $siswa) { goto D540O; EXstP: ikqGV: goto VNhn6; uABsC: goto vJqfo; goto G2awY; Uhd_Q: $jum += 1; goto EXstP; D540O: if ($siswa->id != null) { goto LPnxn; } goto opwdL; APG9v: goto ikqGV; goto Uz8bO; opwdL: $this->activate($siswa->id_siswa); goto uABsC; Uz8bO: vJqfo: goto Uhd_Q; G2awY: LPnxn: goto APG9v; VNhn6: } goto KehZm; ryOLG: $siswaAktif = $this->users->getSiswaAktif($ids); goto uSi1e; egaas: $this->output_json($data); goto Zlk9N; Zlk9N: } public function nonaktifkanSemua() { goto IkZVg; psVAT: $siswaAktif = $this->users->getSiswaAktif($ids); goto Tpgn4; Tpgn4: $jum = 0; goto P6lgj; SWObN: $this->output_json($data); goto jjhXt; BwbQ1: OsfB4: goto sYOKn; IkZVg: $ids = $this->input->post("\151\x64\163", true); goto psVAT; sYOKn: $data = ["\x73\164\x61\x74\x75\163" => true, "\152\x75\155\x6c\141\150" => $jum, "\155\x73\x67" => $jum . "\x20\163\151\163\167\x61\40\144\151\156\x6f\156\141\x6b\164\x69\x66\153\141\156\56"]; goto SWObN; P6lgj: foreach ($siswaAktif as $siswa) { goto ZvU3b; ZvU3b: if ($siswa->id != null) { goto RTU2C; } goto u9t5O; bqjV3: goto KyEf0; goto yXARY; fXI5W: $this->output_json($del); goto Ny22E; Ny22E: KyEf0: goto qYbAm; qYbAm: $jum += 1; goto zPBOv; u9t5O: goto vpPsX; goto bqjV3; zPBOv: vpPsX: goto fBOIA; SNf4a: $del = $this->deactivate($siswa->id, ''); goto fXI5W; yXARY: RTU2C: goto SNf4a; fBOIA: } goto BwbQ1; jjhXt: } public function edit($id) { goto qW1bD; Nd3V2: $this->load->view("\137\164\145\155\160\x6c\141\x74\x65\x73\57\144\x61\x73\150\x62\157\141\x72\144\57\x5f\x68\145\141\x64\x65\162", $data); goto seh31; qF4MH: $data = ["\165\163\x65\x72" => $user, "\x6a\165\x64\x75\x6c" => "\x55\x73\145\162\x20\115\x61\x6e\141\147\x65\155\145\156\164", "\x73\165\142\152\165\144\165\x6c" => "\105\144\151\164\40\104\x61\x74\141\40\125\163\145\x72", "\163\x65\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto GODk8; CrHr8: $data["\x74\x70\137\x61\x63\164\x69\166\x65"] = $tp; goto R4ija; fnNqQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto bz1zn; BTsqu: $data["\x73\x6d\x74\137\x61\x63\164\x69\x76\x65"] = $smt; goto xCU0m; mNCvT: $this->load->view("\x6d\145\155\142\145\x72\x73\57\x67\165\162\x75\57\164\x65\155\x70\154\x61\164\x65\x73\57\x66\157\157\164\145\x72"); goto hcxle; Q3VtQ: $data["\x70\x72\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Nd3V2; mIa4Q: TVkgB: goto Q3VtQ; seh31: $this->load->view("\x75\x73\x65\162\163\57\163\x69\x73\x77\141\x2f\x65\144\x69\164"); goto dRXA1; K3OHn: $smt = $this->dashboard->getSemesterActive(); goto Sb9ge; hcxle: goto MV1q2; goto mIa4Q; wZUHr: $data["\164\x70"] = $this->dashboard->getTahun(); goto CrHr8; qW1bD: $tp = $this->dashboard->getTahunActive(); goto K3OHn; xCU0m: if ($this->ion_auth->is_admin()) { goto TVkgB; } goto fnNqQ; MaI1Z: MV1q2: goto RMcbt; GODk8: $data["\x73\x69\x73\x77\x61"] = $siswa; goto wZUHr; Sb9ge: $siswa = $this->master->getDataSiswaById($tp->id_tp, $smt->id_smt, $id); goto QBvdF; QBvdF: $user = $this->ion_auth->user()->row(); goto qF4MH; eusQZ: $this->load->view("\x6d\145\155\x62\145\x72\163\x2f\x67\165\x72\x75\x2f\164\x65\x6d\x70\154\x61\x74\145\163\x2f\150\x65\x61\144\x65\x72", $data); goto TUuf5; dRXA1: $this->load->view("\137\x74\145\155\160\154\141\x74\145\x73\57\144\141\163\150\x62\x6f\141\162\x64\57\137\146\157\157\x74\145\162"); goto MaI1Z; bz1zn: $data["\x67\165\x72\165"] = $guru; goto eusQZ; TUuf5: $this->load->view("\x75\x73\x65\162\x73\57\163\x69\x73\x77\141\x2f\x65\144\151\x74"); goto mNCvT; R4ija: $data["\163\155\164"] = $this->dashboard->getSemester(); goto BTsqu; RMcbt: } public function update() { goto GrGsR; t6F3N: $username = $this->input->post("\x75\163\145\162\156\141\155\x65", true); goto pNDk3; Ta_TP: $newPass = $this->input->post("\156\145\167", true); goto viV5y; K0yP6: $this->form_validation->set_rules("\156\145\167", "\120\141\x73\163\x77\157\162\x64\40\x42\141\x72\165", "\x72\145\161\x75\x69\162\145\x64\x7c\156\165\155\x65\x72\151\x63\x7c\164\x72\151\x6d\174\x6d\151\156\x5f\x6c\145\x6e\147\x74\150\133\x36\135"); goto gIfpB; lINXw: $this->form_validation->set_rules("\x6f\154\x64", "\x50\x61\163\x73\167\x6f\x72\x64\x20\114\141\x6d\x61", "\162\x65\161\165\151\162\x65\x64\x7c\156\x75\x6d\145\x72\151\x63\174\164\162\151\155\174\x6d\x69\x6e\137\x6c\145\156\147\164\x68\x5b\x36\135"); goto K0yP6; GrGsR: $id_siswa = $this->input->post("\151\x64\137\x73\x69\163\167\141", true); goto t6F3N; pNDk3: $oldPass = $this->input->post("\157\154\x64", true); goto Ta_TP; viV5y: $this->form_validation->set_rules("\x75\x73\145\x72\156\x61\x6d\145", "\125\x73\x65\x72\x6e\x61\155\145", "\x72\x65\x71\165\151\162\145\144\174\156\165\x6d\x65\x72\151\x63\174\x74\x72\x69\155\x7c\155\x69\156\x5f\154\145\x6e\x67\x74\x68\133\x36\135\x7c\x69\163\x5f\x75\156\151\161\165\145\x5b\155\141\x73\164\145\162\x5f\x73\151\163\167\x61\56\x75\x73\145\x72\156\x61\x6d\145\135"); goto lINXw; gIfpB: } public function change_password() { goto SZeBH; ZVfxt: $data = ["\x73\164\141\x74\165\163" => false, "\x6d\x73\x67" => $this->ion_auth->errors()]; goto UgrtL; gQ9_Z: if ($change) { goto IIzFS; } goto ZVfxt; SZeBH: $this->form_validation->set_rules("\x6f\154\144", $this->lang->line("\143\x68\x61\x6e\x67\x65\x5f\x70\141\163\163\x77\157\162\x64\137\166\141\154\151\144\141\x74\x69\157\156\137\x6f\154\144\x5f\160\141\163\163\x77\157\162\x64\x5f\154\141\x62\x65\154"), "\x72\145\161\x75\151\162\x65\x64"); goto fpsoh; OB6rk: mmdG2: goto DOu2U; YqcMj: goto mmdG2; goto KD2j2; DOu2U: $this->output_json($data); goto uYIAb; NatV7: $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\x6c\144"), $this->input->post("\156\x65\x77")); goto gQ9_Z; fpsoh: $this->form_validation->set_rules("\156\145\x77", $this->lang->line("\143\x68\141\x6e\x67\145\137\x70\x61\163\163\167\x6f\x72\144\x5f\166\141\154\151\x64\x61\x74\x69\157\x6e\x5f\156\x65\x77\x5f\x70\x61\x73\163\167\x6f\x72\x64\137\x6c\x61\x62\145\154"), "\162\x65\x71\x75\151\x72\145\x64\x7c\155\151\x6e\x5f\154\145\156\147\x74\150\133" . $this->config->item("\155\151\x6e\137\160\141\x73\163\x77\157\162\144\137\x6c\x65\x6e\x67\164\x68", "\x69\x6f\x6e\137\x61\x75\164\x68") . "\135\x7c\x6d\141\164\x63\x68\x65\x73\x5b\156\145\167\x5f\143\157\156\x66\151\x72\155\x5d"); goto ySVEB; XWz6P: if ($this->form_validation->run() === FALSE) { goto gd_Fh; } goto DR7Iy; Qfl5K: $data = ["\x73\164\141\164\x75\x73" => false, "\145\x72\x72\157\162\x73" => ["\x6f\154\144" => form_error("\157\154\144"), "\x6e\x65\x77" => form_error("\156\x65\167"), "\x6e\x65\x77\137\x63\157\156\146\151\162\155" => form_error("\x6e\x65\167\137\143\157\x6e\146\x69\x72\155")]]; goto OB6rk; UgrtL: goto eRP1y; goto aK9dT; KD2j2: gd_Fh: goto Qfl5K; VGXlG: eRP1y: goto YqcMj; yekev: $data["\x73\164\141\x74\x75\x73"] = true; goto VGXlG; aK9dT: IIzFS: goto yekev; DR7Iy: $identity = $this->session->userdata("\151\x64\145\156\164\x69\164\x79"); goto NatV7; ySVEB: $this->form_validation->set_rules("\x6e\145\167\137\143\157\156\x66\x69\x72\x6d", $this->lang->line("\x63\150\141\156\147\x65\137\x70\x61\163\x73\x77\157\162\144\137\166\x61\x6c\x69\x64\x61\164\151\x6f\156\x5f\156\145\167\x5f\160\x61\x73\x73\167\x6f\162\x64\137\x63\x6f\x6e\x66\x69\x72\x6d\x5f\x6c\141\142\145\x6c"), "\x72\145\x71\x75\x69\162\145\x64"); goto XWz6P; uYIAb: } public function delete($id) { goto M0nQ3; ARVUv: $data["\x73\164\141\164\165\163"] = $this->ion_auth->delete_user($id) ? true : false; goto yX8jk; M0nQ3: $this->is_has_access(); goto ARVUv; yX8jk: $this->output_json($data); goto i0yTT; i0yTT: } private function hash_password($password) { goto ly13x; UM_2d: return FALSE; goto va_1y; yAYUd: return password_hash($password, PASSWORD_BCRYPT); goto NhzRf; ly13x: if (!(empty($password) || strpos($password, "\0") !== FALSE || strlen($password) > 4096)) { goto v53V1; } goto UM_2d; va_1y: v53V1: goto yAYUd; NhzRf: } }
