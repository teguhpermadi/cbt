<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtalokasi extends CI_Controller { public function __construct() { goto knWdQ; a6KRm: $this->load->library(["\x64\141\x74\141\164\x61\x62\x6c\145\x73", "\146\x6f\x72\155\x5f\x76\x61\154\151\x64\141\x74\151\x6f\x6e"]); goto j1Z8G; yFFHa: $this->load->model("\114\x6f\147\137\155\157\144\145\154", "\x6c\x6f\x67\x67\x69\156\147"); goto JxsKr; riiEK: $this->form_validation->set_error_delimiters('', ''); goto bR6xw; Qc2fK: vJcbN: goto Xy34L; QvYli: $this->load->model("\x43\x62\164\x5f\155\x6f\x64\x65\154", "\x63\142\x74"); goto yFFHa; BePCm: show_error("\110\141\156\x79\x61\x20\101\x64\x6d\151\x6e\x69\x73\164\x72\141\164\x6f\162\40\171\141\156\147\40\x64\x69\x62\145\x72\x69\x20\150\141\x6b\40\165\156\164\x75\153\x20\155\x65\156\147\x61\x6b\x73\145\x73\40\x68\141\x6c\141\x6d\x61\156\40\x69\156\x69\54\x20\x3c\141\x20\x68\x72\x65\146\75\x22" . base_url("\144\141\163\x68\x62\157\141\162\144") . "\42\x3e\x4b\x65\155\142\x61\154\151\x20\x6b\x65\40\155\145\x6e\165\40\141\x77\x61\154\74\x2f\141\76", 403, "\x41\153\163\x65\x73\x20\124\145\x72\x6c\141\x72\141\x6e\147"); goto Qc2fK; bzVh2: ilWG_: goto eUSU7; j1Z8G: $this->load->model("\x4d\x61\x73\164\145\x72\137\x6d\x6f\x64\x65\x6c", "\155\141\163\x74\x65\x72"); goto NM1l1; MnZIF: if (!$this->ion_auth->logged_in()) { goto ilWG_; } goto bLxa5; Xy34L: goto JLeke; goto bzVh2; NM1l1: $this->load->model("\x44\141\x73\x68\x62\157\x61\162\144\137\155\x6f\x64\x65\x6c", "\x64\141\163\150\142\157\x61\162\x64"); goto QvYli; lXdhW: JLeke: goto a6KRm; eUSU7: redirect("\x61\165\164\150"); goto lXdhW; bLxa5: if ($this->ion_auth->is_admin()) { goto vJcbN; } goto BePCm; JxsKr: $this->load->model("\104\x72\x6f\x70\x64\157\x77\x6e\x5f\x6d\157\144\x65\x6c", "\x64\x72\x6f\x70\144\157\167\156"); goto riiEK; knWdQ: parent::__construct(); goto MnZIF; bR6xw: } public function output_json($data, $encode = true) { goto MfSM3; larQk: $data = json_encode($data); goto akUDl; MfSM3: if (!$encode) { goto gJSDh; } goto larQk; akUDl: gJSDh: goto q70JS; q70JS: $this->output->set_content_type("\x61\x70\160\154\151\x63\x61\164\151\x6f\x6e\57\x6a\x73\x6f\x6e")->set_output($data); goto h3EKH; h3EKH: } public function index() { goto AZ1VO; AuGg4: goto jqsjO; goto IWcke; M2Py2: bNkb4: goto vR5UR; J1LI5: goto ycYjt; goto fWmwD; YKMuE: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto GTP5Q; QIFnE: $dari_selected = $this->input->get("\144\x61\162\151", true); goto RAFVO; DuMvj: $data["\x73\x6d\x74\x5f\141\x63\164\151\x76\x65"] = $smt; goto YKMuE; fWt8V: oBkYc: goto e9PBv; fTKhf: $filter_selected = $this->input->get("\x66\x69\154\164\145\x72", true); goto QIFnE; ctTdK: $level_selected = $this->input->get("\x6c\x65\166\x65\154", true); goto fTKhf; UcSdi: $data["\154\145\166\x65\x6c\163"] = $levels; goto qJZ20; ZT21b: $levels = ["\60" => "\x50\151\154\151\150\x20\114\145\x76\145\154", "\x37" => "\x37", "\x38" => "\x38", "\x39" => "\71"]; goto Cv_eW; lNAys: if (!($jenis_selected != null && $level_selected != null)) { goto bNkb4; } goto o9Yqs; pnk96: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); ThUHI: } goto wQIhh; ALVOQ: $data["\x6a\x65\156\151\163\137\x73\145\154\x65\143\x74\145\144"] = $jenis_selected; goto fcpH8; mcYOi: l0caL: goto hwWxj; wQIhh: KrtF9: goto kxIER; tUXEj: $data["\146\151\154\x74\145\x72"] = ["\x30" => "\x53\145\155\x75\141", "\x31" => "\124\141\156\147\x67\x61\154"]; goto ALVOQ; RAFVO: $sampai_selected = $this->input->get("\x73\x61\155\160\x61\151", true); goto tUXEj; kxIER: JjymK: goto L6bBj; ZEZRl: goto ycYjt; goto tyOa7; qJZ20: $ret = []; goto TTw7x; w10Eo: $tp = $this->dashboard->getTahunActive(); goto r0tI0; NDTrI: $levels = []; goto fmUTX; Cv_eW: goto ycYjt; goto mcYOi; ugtUb: if ($setting->jenjang == "\x32") { goto wn9Us; } goto geTfR; IT2zK: $jadwals = []; goto lNAys; x5oDm: if (!(count($id_jenis) > 0)) { goto JjymK; } goto pnk96; kovZX: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto DuMvj; JydWI: jqsjO: goto T8pt9; TTw7x: foreach ($jadwals as $key => $row) { goto tyfT3; i0aL9: $ret[$row->tgl_mulai] = []; goto xoJVT; aVRkq: goto zMaOt; goto gW9bg; xoJVT: array_push($ret[$row->tgl_mulai], $row); goto aVRkq; tyfT3: if (isset($ret[$row->tgl_mulai])) { goto E9Bsk; } goto i0aL9; RkNiP: NHteu: goto dg2LP; gW9bg: E9Bsk: goto eLAi_; eLAi_: array_push($ret[$row->tgl_mulai], $row); goto p4OXN; p4OXN: zMaOt: goto RkNiP; dg2LP: } goto fWt8V; c_yRC: $data = ["\165\x73\145\162" => $user, "\152\x75\x64\165\x6c" => "\101\154\157\x6b\x61\x73\x69\x20\x57\141\x6b\164\165", "\163\165\142\152\x75\144\x75\x6c" => "\x41\154\157\x6b\x61\x73\x69\x20\127\141\153\164\165\x20\x55\152\x69\x61\156", "\163\145\164\164\151\156\x67" => $setting]; goto w10Eo; o9Yqs: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, $level_selected, $dari_selected, $sampai_selected); goto M2Py2; vR5UR: $data["\153\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto R02KL; fWmwD: wn9Us: goto ZT21b; j4Tmq: $this->load->view("\137\164\x65\x6d\x70\x6c\141\164\145\x73\57\144\141\x73\x68\142\157\x61\162\144\x2f\137\x68\145\141\144\145\x72", $data); goto jXsAp; lkWyn: $data["\152\x65\156\x69\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto JydWI; AXldZ: $setting = $this->dashboard->getSetting(); goto c_yRC; mCbkY: $levels = ["\x30" => "\x50\151\x6c\x69\x68\40\x4c\x65\166\145\x6c", "\x31" => "\61", "\62" => "\62", "\x33" => "\63", "\x34" => "\64", "\x35" => "\65", "\66" => "\x36"]; goto J1LI5; yiXDm: $data["\144\x61\x72\x69\137\163\x65\154\x65\x63\164\x65\144"] = $dari_selected; goto S2f1K; vq_yp: $data["\164\x70\x5f\141\143\164\151\166\x65"] = $tp; goto kovZX; geTfR: if ($setting->jenjang == "\x33") { goto l0caL; } goto ZEZRl; chHVh: $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\164\x65\x73\57\x64\141\163\x68\x62\157\141\x72\144\x2f\137\x66\x6f\x6f\x74\145\x72"); goto DThu_; L6bBj: if (count($ids) > 0) { goto QFTZG; } goto PODUM; D7sXZ: $data["\146\x69\154\164\x65\x72\137\x73\x65\154\145\x63\164\x65\144"] = $filter_selected; goto yiXDm; fcpH8: $data["\154\x65\166\x65\154\137\x73\x65\154\x65\143\x74\x65\144"] = $level_selected; goto D7sXZ; r0tI0: $smt = $this->dashboard->getSemesterActive(); goto Xlo_k; IWcke: QFTZG: goto lkWyn; e9PBv: $data["\152\x61\144\x77\x61\154\163"] = $jadwals; goto gxIxj; d1SpI: ycYjt: goto UcSdi; jXsAp: $this->load->view("\x63\x62\164\x2f\141\x6c\157\153\141\163\151\x2f\x64\x61\164\x61"); goto chHVh; hwWxj: $levels = ["\60" => "\x50\x69\x6c\x69\150\40\x4c\145\x76\145\x6c", "\x31\60" => "\61\x30", "\x31\x31" => "\61\x31", "\x31\x32" => "\61\62"]; goto d1SpI; fmUTX: if ($setting->jenjang == "\61") { goto h8fXF; } goto ugtUb; GTP5Q: $ids = []; goto x5oDm; S2f1K: $data["\163\x61\155\x70\x61\x69\x5f\x73\145\x6c\145\x63\164\145\144"] = $sampai_selected; goto IT2zK; PODUM: $data["\x6a\145\x6e\151\163"] = ['' => "\142\145\154\165\x6d\x20\x61\x64\x61\40\x6a\x61\x64\x77\141\x6c\x20\x75\152\x69\x61\156"]; goto AuGg4; AZ1VO: $user = $this->ion_auth->user()->row(); goto AXldZ; gxIxj: $data["\x70\162\157\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto j4Tmq; tyOa7: h8fXF: goto mCbkY; R02KL: $data["\x72\165\x61\x6e\147"] = $this->dropdown->getAllRuang(); goto NDTrI; Xlo_k: $data["\x74\x70"] = $this->dashboard->getTahun(); goto vq_yp; T8pt9: $jenis_selected = $this->input->get("\152\145\156\x69\x73", true); goto ctTdK; DThu_: } public function saveAlokasi() { goto dzWei; CRrym: $insert = []; goto KTjqd; nMC0f: $data["\163\x74\141\164\165\x73"] = $update; goto JN2d4; JN2d4: $this->output_json($data); goto zMKu8; HXIMQ: ip6NO: goto SJg65; KTjqd: foreach ($input as $d) { goto y0cUl; E_6eR: vO0uv: goto MRB31; OABSh: array_push($insert, ["\x69\x64\x5f\x6a\141\144\x77\141\x6c" => $d->id_jadwal, "\x6a\141\x6d\137\153\145" => $d->jam_ke]); goto QxQfe; QxQfe: dGApk: goto E_6eR; y0cUl: if (!($d->id_jadwal != "\x30")) { goto dGApk; } goto OABSh; MRB31: } goto HXIMQ; SJg65: $update = $this->db->update_batch("\143\142\x74\x5f\152\x61\144\167\141\154", $insert, "\x69\144\x5f\152\x61\x64\167\141\x6c"); goto nMC0f; dzWei: $input = json_decode($this->input->post("\141\154\x6f\x6b\141\x73\151", true)); goto CRrym; zMKu8: } }
