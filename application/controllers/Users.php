<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\x45\120\x41\124\x48") or exit("\116\x6f\x20\x64\x69\162\x65\x63\x74\x20\x73\x63\x72\151\x70\164\40\141\143\x63\x65\x73\x73\40\141\x6c\154\x6f\x77\x65\144"); class Users extends CI_Controller { public function __construct() { goto c_6J1; FGuqF: $this->load->model("\x55\163\145\x72\163\x5f\x6d\x6f\x64\x65\154", "\165\163\145\x72\163"); goto jECCG; c_6J1: parent::__construct(); goto IPbxL; IPbxL: if ($this->ion_auth->logged_in()) { goto ULRcd; } goto PH0B7; jECCG: $this->load->model("\x4d\x61\163\x74\x65\162\137\x6d\157\144\x65\x6c", "\x6d\141\x73\164\145\x72"); goto Om7MF; KXwUd: $this->form_validation->set_error_delimiters('', ''); goto nTvbc; GYyZ2: $this->load->library(["\144\x61\x74\x61\164\x61\142\x6c\x65\163", "\146\157\162\x6d\137\166\141\154\151\144\x61\164\151\157\x6e"]); goto FGuqF; VxoMP: ULRcd: goto GYyZ2; Om7MF: $this->load->model("\104\141\163\150\x62\157\x61\x72\144\137\155\157\144\145\x6c", "\x61\x64\x6d\x69\156\144\141\x73\x68\142\157\141\x72\144"); goto KXwUd; PH0B7: redirect("\141\x75\x74\x68"); goto VxoMP; nTvbc: } public function is_admin() { goto DihD0; EkVTM: zITfF: goto HNtz3; DihD0: if ($this->ion_auth->is_admin()) { goto zITfF; } goto N3MpJ; N3MpJ: show_error("\x48\141\156\171\141\x20\101\144\x6d\151\156\x69\x73\164\162\x61\x74\x6f\162\40\171\141\156\147\x20\144\151\142\145\162\151\40\x68\x61\x6b\x20\x75\156\x74\x75\x6b\x20\x6d\145\156\x67\141\x6b\163\145\x73\x20\150\x61\154\x61\x6d\141\156\x20\x69\x6e\151\54\40\74\141\40\150\162\x65\146\75\x22" . base_url("\144\x61\x73\x68\142\x6f\141\162\144") . "\x22\x3e\113\x65\x6d\x62\x61\154\x69\x20\153\145\40\155\x65\156\165\x20\x61\167\141\x6c\74\x2f\141\x3e", 403, "\x41\x6b\x73\145\163\x20\124\145\x72\154\141\x72\x61\156\147"); goto EkVTM; HNtz3: } public function output_json($data, $encode = true) { goto EJP1n; jhj1m: $this->output->set_content_type("\141\x70\x70\x6c\x69\143\141\x74\x69\x6f\x6e\57\152\163\157\156")->set_output($data); goto kW10M; vmsZI: $data = json_encode($data); goto t5oD5; t5oD5: ED8IM: goto jhj1m; EJP1n: if (!$encode) { goto ED8IM; } goto vmsZI; kW10M: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto qv1Ly; ZFtm5: $data["\x74\x70"] = $this->admindashboard->getTahun(); goto UNVG2; SNKTv: $this->load->view("\x5f\x74\145\155\x70\154\x61\164\145\x73\x2f\x64\x61\x73\150\142\157\141\x72\144\x2f\150\x65\x61\x64\145\x72\x2e\160\150\160", $data); goto crjsZ; UNVG2: $data["\164\160\x5f\141\x63\x74\151\166\x65"] = $this->admindashboard->getTahunActive(); goto Bx03Z; OyNDM: $data = ["\165\163\x65\x72" => $this->ion_auth->user()->row(), "\x6a\x75\x64\165\x6c" => "\x55\163\x65\x72\40\115\141\x6e\141\147\145\x6d\145\x6e\x74", "\x73\x75\142\x6a\165\144\165\154" => "\104\141\x74\141\x20\x55\163\145\162"]; goto ZFtm5; Bx03Z: $data["\163\x6d\164"] = $this->admindashboard->getSemester(); goto zoGWc; zoGWc: $data["\x73\x6d\x74\137\141\x63\x74\x69\x76\x65"] = $this->admindashboard->getSemesterActive(); goto SNKTv; qv1Ly: $this->is_admin(); goto OyNDM; BkmAf: $this->load->view("\x5f\x74\x65\x6d\160\154\141\x74\x65\x73\x2f\144\141\163\150\142\x6f\141\162\144\57\x66\x6f\x6f\164\x65\x72\x2e\160\x68\160"); goto dRMi_; crjsZ: $this->load->view("\165\163\x65\162\163\57\144\x61\x74\x61"); goto BkmAf; dRMi_: } public function edit($id) { goto kAjl0; kAjl0: $level = $this->ion_auth->get_users_groups($id)->result(); goto BaYkC; UOyqZ: $this->load->view("\x5f\x74\145\155\160\x6c\x61\x74\x65\x73\x2f\144\141\x73\x68\x62\157\141\x72\144\x2f\x68\145\x61\x64\x65\x72\x2e\x70\150\x70", $data); goto GL5u1; qr0oG: $this->load->view("\137\164\x65\x6d\160\154\141\164\x65\163\x2f\144\x61\163\150\142\157\141\162\144\x2f\146\x6f\157\x74\x65\x72\x2e\x70\x68\x70"); goto iBayV; BaYkC: $data = ["\x75\x73\x65\x72" => $this->ion_auth->user()->row(), "\x6a\165\x64\x75\154" => "\125\163\145\162\x20\x4d\x61\156\141\x67\145\x6d\145\x6e\x74", "\163\165\x62\152\x75\144\165\x6c" => "\x45\144\151\164\40\x44\141\x74\141\x20\x55\163\x65\x72", "\x75\x73\x65\162\163" => $this->ion_auth->user($id)->row(), "\x67\x72\157\165\160\x73" => $this->ion_auth->groups()->result(), "\x6c\x65\166\x65\154" => $level[0]]; goto UOyqZ; GL5u1: $this->load->view("\x75\163\145\162\163\x2f\x65\x64\x69\164"); goto qr0oG; iBayV: } public function edit_info() { goto BbqKT; K7OFJ: hz4jR: goto IMdOT; Mik1Z: $id = $this->input->post("\151\144", true); goto ROLB0; VbV1E: if ($this->form_validation->run() === FALSE) { goto hz4jR; } goto Mik1Z; l4qNE: $this->form_validation->set_rules("\x66\x69\x72\x73\164\x5f\156\x61\155\145", "\x46\151\x72\163\164\x20\116\141\155\145", "\162\145\x71\x75\x69\162\x65\x64"); goto nercs; k3WDU: $this->output_json($data); goto hirKe; FaBY6: $data["\x65\x72\x72\157\x72\x73"] = ["\x75\x73\145\x72\156\x61\x6d\145" => form_error("\x75\x73\x65\x72\x6e\x61\x6d\x65"), "\146\151\x72\163\x74\x5f\156\141\155\x65" => form_error("\146\151\x72\163\164\137\x6e\x61\155\x65"), "\154\x61\x73\x74\137\x6e\x61\155\145" => form_error("\154\141\x73\164\137\156\x61\x6d\x65"), "\x65\155\141\x69\x6c" => form_error("\x65\x6d\x61\x69\x6c")]; goto C5aBT; C5aBT: U4eE5: goto k3WDU; uh0OF: $data["\x73\164\x61\x74\x75\163"] = $update ? true : false; goto kmRvW; IMdOT: $data["\163\164\141\164\x75\x73"] = false; goto FaBY6; RjTPn: $update = $this->master->update("\x75\x73\145\162\x73", $input, "\151\144", $id); goto uh0OF; YVA92: $this->form_validation->set_rules("\x75\x73\x65\162\156\141\x6d\145", "\125\163\x65\162\x6e\x61\155\145", "\162\x65\x71\x75\151\162\x65\x64"); goto l4qNE; nercs: $this->form_validation->set_rules("\154\141\163\164\137\156\141\x6d\145", "\x4c\x61\163\164\x20\x4e\x61\155\145", "\x72\x65\161\165\151\162\x65\144"); goto wpxbc; ROLB0: $input = ["\x75\163\x65\x72\x6e\x61\155\x65" => $this->input->post("\x75\x73\x65\x72\156\141\x6d\x65", true), "\146\151\162\x73\x74\x5f\156\141\x6d\145" => $this->input->post("\146\151\x72\x73\164\x5f\x6e\x61\155\145", true), "\x6c\141\x73\x74\137\x6e\x61\x6d\x65" => $this->input->post("\154\x61\163\x74\x5f\x6e\141\x6d\145", true), "\145\x6d\141\151\154" => $this->input->post("\x65\x6d\141\151\x6c", true)]; goto RjTPn; wpxbc: $this->form_validation->set_rules("\x65\x6d\141\x69\x6c", "\105\155\x61\x69\x6c", "\x72\x65\x71\x75\x69\162\145\144\x7c\166\141\x6c\151\144\137\x65\x6d\141\151\x6c"); goto VbV1E; BbqKT: $this->is_admin(); goto YVA92; kmRvW: goto U4eE5; goto K7OFJ; hirKe: } public function edit_status() { goto tLD9U; INPKi: $this->form_validation->set_rules("\163\164\141\164\x75\x73", "\x53\164\141\x74\165\x73", "\x72\145\161\165\x69\x72\x65\x64"); goto jZV3l; NSPer: $data["\163\164\x61\x74\165\163"] = $update ? true : false; goto NHt4f; KpT3u: $id = $this->input->post("\x69\144", true); goto s_0LY; NoZsi: QP1TB: goto MdJ_l; NHt4f: goto h0h6y; goto NoZsi; jZV3l: if ($this->form_validation->run() === FALSE) { goto QP1TB; } goto KpT3u; cihb3: $data["\x65\x72\x72\157\x72\x73"] = ["\x73\164\141\x74\165\x73" => form_error("\163\164\141\164\165\x73")]; goto hpPp_; s_0LY: $input = ["\141\x63\164\x69\x76\145" => $this->input->post("\163\x74\141\x74\165\163", true)]; goto Z_ZTW; Z_ZTW: $update = $this->master->update("\165\x73\x65\162\x73", $input, "\151\x64", $id); goto NSPer; tLD9U: $this->is_admin(); goto INPKi; hpPp_: h0h6y: goto cV81f; cV81f: $this->output_json($data); goto fSSQ_; MdJ_l: $data["\x73\164\x61\164\165\163"] = false; goto cihb3; fSSQ_: } public function edit_level() { goto Kir3q; Rxnld: $this->form_validation->set_rules("\154\x65\x76\x65\154", "\114\145\x76\145\154", "\x72\145\161\x75\151\x72\145\x64"); goto lGDPr; WoUi2: $id = $this->input->post("\151\x64", true); goto TpzhO; jP7Y4: goto QRCsz; goto xQ1e7; PHMsc: $data["\x65\x72\x72\157\x72\x73"] = ["\x6c\145\166\x65\x6c" => form_error("\154\x65\166\145\154")]; goto E05T3; Kir3q: $this->is_admin(); goto Rxnld; TpzhO: $input = ["\147\162\157\165\x70\x5f\151\144" => $this->input->post("\154\x65\166\x65\154", true)]; goto GXysI; xC23_: $this->output_json($data); goto izdRa; E05T3: QRCsz: goto xC23_; Ol7hL: $data["\163\164\141\164\165\x73"] = $update ? true : false; goto jP7Y4; xQ1e7: gykUU: goto yHxoV; lGDPr: if ($this->form_validation->run() === FALSE) { goto gykUU; } goto WoUi2; yHxoV: $data["\x73\164\141\164\x75\163"] = false; goto PHMsc; GXysI: $update = $this->master->update("\165\x73\145\x72\x73\x5f\147\x72\x6f\165\x70\163", $input, "\165\x73\x65\x72\x5f\151\x64", $id); goto Ol7hL; izdRa: } public function change_password() { goto Zt7xR; EITID: SnhLy: goto iDvTE; okJSx: a3Dig: goto MH1ty; tJz85: je_Ip: goto LS_2z; iDvTE: $this->output_json($data); goto KHM02; MH1ty: goto SnhLy; goto hFhlK; UsHA9: $data = ["\163\164\x61\x74\165\163" => false, "\155\163\x67" => $this->ion_auth->errors()]; goto yzEJh; hFhlK: ug0yJ: goto aXQqK; wtso5: if ($change) { goto je_Ip; } goto UsHA9; aXQqK: $data = ["\163\164\x61\x74\x75\163" => false, "\x65\x72\x72\157\x72\x73" => ["\157\154\144" => form_error("\157\x6c\144"), "\x6e\145\167" => form_error("\x6e\145\167"), "\x6e\x65\167\137\x63\157\x6e\x66\151\x72\x6d" => form_error("\x6e\x65\x77\137\x63\157\156\x66\151\x72\155")]]; goto EITID; mwYy6: $identity = $this->session->userdata("\x69\144\145\156\x74\151\164\171"); goto moSQC; yzEJh: goto a3Dig; goto tJz85; Zt7xR: $this->form_validation->set_rules("\x6f\154\144", $this->lang->line("\143\x68\141\x6e\x67\145\x5f\x70\141\x73\x73\x77\x6f\x72\x64\137\x76\x61\x6c\151\144\x61\164\151\x6f\156\x5f\157\154\x64\x5f\x70\x61\x73\x73\x77\157\162\x64\x5f\154\x61\x62\145\x6c"), "\162\x65\x71\165\x69\162\145\x64"); goto FhYEf; FhYEf: $this->form_validation->set_rules("\x6e\145\x77", $this->lang->line("\x63\150\141\x6e\x67\x65\x5f\x70\141\163\x73\167\157\x72\144\x5f\166\141\x6c\151\144\141\x74\x69\x6f\156\137\156\145\x77\137\x70\x61\x73\x73\x77\x6f\x72\144\x5f\x6c\x61\x62\145\x6c"), "\x72\145\x71\165\x69\x72\145\x64\174\155\x69\156\137\154\x65\156\147\x74\x68\x5b" . $this->config->item("\x6d\x69\156\137\x70\141\163\163\167\157\x72\144\137\x6c\x65\156\x67\x74\x68", "\151\x6f\156\137\141\x75\x74\x68") . "\x5d\x7c\155\141\x74\143\150\x65\x73\133\156\145\167\137\143\157\156\146\151\x72\x6d\135"); goto evpnC; LS_2z: $data["\x73\x74\x61\164\165\163"] = true; goto okJSx; lBKDT: if ($this->form_validation->run() === FALSE) { goto ug0yJ; } goto mwYy6; moSQC: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\x6c\x64"), $this->input->post("\x6e\145\167")); goto wtso5; evpnC: $this->form_validation->set_rules("\156\145\x77\x5f\x63\x6f\x6e\146\151\x72\155", $this->lang->line("\143\150\x61\156\147\x65\x5f\x70\x61\163\163\x77\x6f\x72\x64\137\x76\x61\154\151\x64\141\164\151\157\x6e\137\156\x65\x77\x5f\160\141\x73\x73\167\157\162\144\x5f\x63\157\156\x66\x69\x72\155\x5f\154\141\x62\x65\154"), "\162\145\x71\165\x69\x72\x65\144"); goto lBKDT; KHM02: } public function delete($id) { goto pPj9O; PRXB8: $this->output_json($data); goto Hs3qc; pPj9O: $this->is_admin(); goto eZEA6; eZEA6: $data["\163\x74\x61\x74\x75\163"] = $this->ion_auth->delete_user($id) ? true : false; goto PRXB8; Hs3qc: } }
