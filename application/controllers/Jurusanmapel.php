<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\120\101\124\110") or exit("\116\x6f\40\144\x69\162\145\x63\164\40\x73\143\x72\151\x70\x74\40\141\143\x63\x65\x73\163\x20\141\154\x6c\x6f\x77\145\144"); class JurusanMapel extends CI_Controller { public function __construct() { goto x6e0c; LRSlU: if ($this->ion_auth->is_admin()) { goto hOCRx; } goto OM0TN; gGVey: $this->form_validation->set_error_delimiters('', ''); goto WwIdB; bK2iT: goto iwLWX; goto v_QQa; x6e0c: parent::__construct(); goto KtDV9; QYR1n: redirect("\x61\x75\x74\x68"); goto B969C; o1Oe1: $this->load->library(["\x64\141\164\x61\x74\x61\x62\154\x65\x73", "\x66\157\x72\x6d\137\166\141\154\x69\x64\141\x74\x69\157\x6e"]); goto GLNKM; j8okB: hOCRx: goto bK2iT; KtDV9: if (!$this->ion_auth->logged_in()) { goto jZvdA; } goto LRSlU; B969C: iwLWX: goto o1Oe1; GLNKM: $this->load->model("\x4d\x61\x73\164\x65\162\137\x6d\157\144\x65\154", "\x6d\141\163\164\145\162"); goto gGVey; v_QQa: jZvdA: goto QYR1n; OM0TN: show_error("\110\x61\x6e\x79\x61\x20\x41\144\155\x69\x6e\x69\163\x74\x72\141\164\x6f\x72\x20\171\141\156\147\40\x64\x69\142\x65\x72\151\x20\150\x61\153\x20\x75\x6e\x74\x75\153\40\x6d\x65\156\x67\141\x6b\163\x65\163\40\150\141\154\141\155\x61\156\40\151\x6e\x69\54\x20\x3c\x61\40\x68\162\x65\x66\75\x22" . base_url("\144\141\x73\x68\142\157\x61\x72\144") . "\x22\76\113\145\155\x62\x61\x6c\151\40\153\x65\x20\x6d\145\156\x75\x20\141\x77\x61\154\x3c\x2f\141\x3e", 403, "\x41\x6b\x73\x65\x73\40\124\145\162\154\141\162\141\156\147"); goto j8okB; WwIdB: } public function output_json($data, $encode = true) { goto CizKc; VmDjZ: $this->output->set_content_type("\x61\x70\x70\154\151\x63\x61\164\151\157\156\x2f\152\x73\x6f\156")->set_output($data); goto DBHEB; R8mVI: JnluY: goto VmDjZ; MVfoH: $data = json_encode($data); goto R8mVI; CizKc: if (!$encode) { goto JnluY; } goto MVfoH; DBHEB: } public function index() { goto pQ24o; pQ24o: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\x6a\165\x64\165\x6c" => "\112\165\x72\x75\163\x61\x6e\x20\x4d\x61\164\x61\x20\113\x75\x6c\151\141\x68", "\163\x75\142\152\165\144\x75\154" => "\104\141\x74\141\40\112\165\162\165\163\141\x6e\x20\x4d\141\164\x61\x20\113\x75\154\151\x61\150"]; goto HP16F; nxMKo: $this->load->view("\137\x74\x65\155\x70\x6c\x61\x74\x65\163\x2f\144\141\163\150\x62\x6f\x61\x72\144\57\x5f\146\157\x6f\164\x65\162\x2e\160\150\160"); goto OcuID; HP16F: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\164\145\163\x2f\x64\141\163\150\x62\157\141\162\x64\x2f\137\x68\145\141\x64\x65\162\56\160\x68\160", $data); goto lZQgL; lZQgL: $this->load->view("\x72\145\x6c\x61\163\x69\x2f\x6a\x75\162\165\x73\x61\x6e\155\x61\160\145\x6c\57\144\x61\x74\141"); goto nxMKo; OcuID: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto dBPID; DFB2P: $this->load->view("\x72\x65\x6c\141\x73\x69\57\152\x75\x72\x75\x73\x61\156\155\x61\x70\145\154\x2f\141\144\144"); goto K0Pex; K0Pex: $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\x74\x65\x73\x2f\144\x61\x73\150\x62\157\x61\162\x64\x2f\137\146\x6f\157\164\x65\162\x2e\x70\150\160"); goto gGId6; kb5FC: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\145\x73\57\144\141\x73\150\x62\157\141\162\144\57\x5f\x68\145\141\144\145\162\x2e\x70\150\160", $data); goto DFB2P; dBPID: $data = ["\165\x73\x65\162" => $this->ion_auth->user()->row(), "\x6a\165\144\x75\154" => "\x54\x61\x6d\142\x61\150\40\112\165\x72\x75\163\x61\x6e\40\x4d\x61\x74\141\40\113\x75\154\x69\141\150", "\163\165\x62\x6a\165\144\165\154" => "\x54\x61\155\x62\141\x68\x20\x44\141\164\x61\x20\x4a\x75\162\x75\163\141\156\40\115\141\164\141\x20\x4b\x75\154\151\x61\x68", "\155\141\x70\x65\154" => $this->master->getMapel()]; goto kb5FC; gGId6: } public function edit($id) { goto FdE5w; FdE5w: $data = ["\x75\163\x65\x72" => $this->ion_auth->user()->row(), "\x6a\x75\144\165\x6c" => "\x45\x64\x69\164\x20\112\165\162\165\x73\141\x6e\x20\x4d\x61\x74\141\x20\113\165\154\x69\141\x68", "\x73\165\142\152\165\144\165\x6c" => "\x45\144\x69\x74\x20\104\x61\x74\141\x20\112\x75\162\x75\x73\141\156\40\x4d\x61\x74\x61\40\113\165\x6c\151\141\150", "\155\x61\x70\145\x6c" => $this->master->getMapelById($id, true), "\x69\144\137\155\141\x70\145\x6c" => $id, "\141\x6c\x6c\137\x6a\x75\162\165\163\x61\x6e" => $this->master->getAllJurusan(), "\x6a\x75\162\x75\x73\141\x6e" => $this->master->getJurusanByIdMapel($id)]; goto Q2zW0; mSM2V: $this->load->view("\137\x74\145\x6d\x70\x6c\141\164\145\x73\57\144\x61\163\x68\x62\157\x61\x72\x64\57\137\146\x6f\157\164\145\162\56\x70\150\x70"); goto xYBBK; Q2zW0: $this->load->view("\137\x74\145\x6d\x70\x6c\x61\x74\145\163\57\144\141\163\x68\142\157\x61\x72\x64\x2f\x5f\150\x65\x61\x64\145\162\x2e\x70\150\x70", $data); goto ECH9h; ECH9h: $this->load->view("\162\145\x6c\x61\163\151\x2f\152\165\162\x75\163\141\156\x6d\141\x70\x65\x6c\57\x65\x64\x69\164"); goto mSM2V; xYBBK: } public function save() { goto CinsR; nWUZx: $mapel_id = $this->input->post("\155\x61\160\x65\x6c\x5f\x69\x64", true); goto ohBjO; CinsR: $method = $this->input->post("\155\x65\164\150\x6f\144", true); goto RFdU2; DcIiS: if ($method === "\x61\144\144") { goto jAfJJ; } goto JCeMc; Y21Pl: jAfJJ: goto DU1sy; BT3Ns: $input = []; goto bN54e; Lxv7G: $data["\163\164\x61\x74\x75\163"] = $action ? TRUE : FALSE; goto u5Cwk; HRKeX: JV2A5: goto Lxv7G; NdGEM: if ($this->form_validation->run() == FALSE) { goto OLU1x; } goto nWUZx; p71D5: $this->form_validation->set_rules("\x6a\x75\x72\165\x73\141\156\137\151\x64\133\x5d", "\x4a\165\x72\165\x73\x61\156", "\x72\x65\x71\165\x69\x72\145\x64"); goto NdGEM; DU1sy: $action = $this->master->create("\x6a\165\162\x75\163\x61\x6e\137\x6d\x61\x70\x65\x6c", $input, true); goto HRKeX; OxEHm: $this->output_json($data); goto ubfEq; ubfEq: I1RUv: goto ejke2; mgV3B: $action = $this->master->create("\x6a\165\162\x75\163\141\156\137\x6d\141\x70\145\x6c", $input, true); goto O7bRv; ihJbD: goto JV2A5; goto Y21Pl; ejke2: $this->output_json($data); goto YwBBO; RFdU2: $this->form_validation->set_rules("\x6d\141\x70\145\154\137\151\144", "\x4d\141\x74\141\x20\x4b\x75\x6c\x69\141\150", "\x72\145\x71\x75\x69\x72\x65\144"); goto p71D5; u5Cwk: goto I1RUv; goto QNigt; OeTtO: $data = ["\x73\x74\141\x74\165\x73" => false, "\x65\x72\162\x6f\x72\x73" => ["\155\141\x70\145\154\137\151\144" => form_error("\x6d\x61\x70\x65\x6c\137\151\144"), "\x6a\165\x72\x75\x73\141\x6e\x5f\151\144\x5b\135" => form_error("\x6a\x75\x72\x75\x73\x61\156\137\151\144\133\x5d")]]; goto OxEHm; Zne3A: $id = $this->input->post("\x6d\x61\160\145\154\x5f\151\144", true); goto w1uX6; JCeMc: if (!($method === "\x65\144\151\164")) { goto S0LeK; } goto Zne3A; QNigt: OLU1x: goto OeTtO; O7bRv: S0LeK: goto ihJbD; bN54e: foreach ($jurusan_id as $key => $val) { $input[] = ["\155\x61\x70\145\154\137\151\x64" => $mapel_id, "\x6a\165\x72\165\163\x61\x6e\137\151\144" => $val]; Pu7WD: } goto Wjblg; w1uX6: $this->master->delete("\x6a\165\x72\x75\163\x61\x6e\x5f\155\x61\160\145\154", $id, "\155\x61\160\145\154\137\x69\x64"); goto mgV3B; Wjblg: O0mFq: goto DcIiS; ohBjO: $jurusan_id = $this->input->post("\152\165\162\165\163\141\156\137\x69\144", true); goto BT3Ns; YwBBO: } public function delete() { goto tYU2E; PdX3O: $this->output_json(["\x73\x74\141\x74\165\163" => true, "\164\x6f\x74\141\154" => count($chk)]); goto g1Mw3; TuPNG: if (!$this->master->delete("\x6a\x75\x72\x75\x73\x61\156\137\155\x61\x70\x65\154", $chk, "\x6d\141\x70\x65\x6c\x5f\x69\x64")) { goto NGzX3; } goto PdX3O; FG78N: xt22n: goto PJfca; Bp7tF: goto xt22n; goto Sk2Sq; qyGPr: $this->output_json(["\x73\164\141\x74\165\163" => false]); goto FG78N; tYU2E: $chk = $this->input->post("\x63\150\145\x63\153\145\144", true); goto Jfu3c; Sk2Sq: JlOUc: goto qyGPr; g1Mw3: NGzX3: goto Bp7tF; Jfu3c: if (!$chk) { goto JlOUc; } goto TuPNG; PJfca: } }
