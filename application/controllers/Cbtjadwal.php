<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjadwal extends CI_Controller { public function __construct() { goto ThcOA; Y0Fz4: if (!$this->ion_auth->logged_in()) { goto D2Qvw; } goto pZzqM; jwnT_: goto gNIl2; goto E_1eT; PSvi2: G24pN: goto jwnT_; pZzqM: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) { goto G24pN; } goto Zbepi; Zbepi: show_error("\x48\x61\156\x79\x61\x20\x41\144\155\151\x6e\151\x73\164\162\x61\x74\157\162\x20\x64\141\x6e\40\x67\165\162\x75\40\171\141\x6e\x67\40\144\151\142\145\162\x69\x20\150\141\x6b\40\x75\x6e\164\x75\x6b\40\x6d\145\156\147\x61\x6b\x73\145\x73\40\x68\x61\154\141\x6d\141\x6e\x20\151\156\151\x2c\x20\74\x61\40\150\162\145\146\x3d\x22" . base_url("\x64\141\x73\x68\x62\157\141\x72\x64") . "\42\76\113\145\x6d\142\141\x6c\x69\40\x6b\x65\x20\155\x65\x6e\x75\x20\141\167\x61\154\x3c\57\141\76", 403, "\x41\153\163\x65\x73\40\124\145\162\154\x61\x72\141\156\x67"); goto PSvi2; qH11h: redirect("\141\x75\164\150"); goto wrD1d; ThcOA: parent::__construct(); goto Y0Fz4; BteTI: $this->form_validation->set_error_delimiters('', ''); goto DYyjs; CRIaI: $this->load->library(["\x64\x61\x74\141\x74\x61\x62\154\x65\x73", "\146\157\162\155\137\x76\x61\x6c\151\144\x61\x74\x69\157\156"]); goto BteTI; E_1eT: D2Qvw: goto qH11h; wrD1d: gNIl2: goto CRIaI; DYyjs: } public function output_json($data, $encode = true) { goto xS7J6; Wk644: $data = json_encode($data); goto DFmLx; DFmLx: hUeu1: goto DC0xU; xS7J6: if (!$encode) { goto hUeu1; } goto Wk644; DC0xU: $this->output->set_content_type("\141\160\x70\154\151\x63\141\x74\151\x6f\156\57\152\x73\157\x6e")->set_output($data); goto RMCev; RMCev: } public function index() { goto EQv7Y; JD0hw: $data["\163\145\x73\151\163"] = $this->dropdown->getAllSesi(); goto xkzlV; RFsMg: $lvl = $this->input->get("\154\x65\166\x65\x6c", true); goto pZToc; L_IW9: if (!$mode) { goto baGHd; } goto TFxOZ; pZToc: $level = $lvl == null ? "\60" : $lvl; goto gBFps; x49Du: if ($type == "\x31") { goto Jbl7R; } goto oA0bZ; ecEBV: $data["\151\144\137\154\x65\x76\145\154"] = null; goto cLmgs; cE55h: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); dGs7I: } goto JQ8sG; L0uUZ: baGHd: goto u0SrS; giwOf: $data["\152\x61\144\167\141\154\163"] = $this->cbt->getAllDataJadwal(null, null, $id_level); goto tfqpQ; gTRi1: $type = $this->input->get("\x74\171\160\x65"); goto XwabP; OfuCf: goto GInWi; goto mY3Oo; HHMLm: $this->load->model("\104\x72\157\x70\x64\157\167\156\x5f\155\157\x64\x65\154", "\144\162\157\160\144\157\167\x6e"); goto RFsMg; Gg0am: goto GInWi; goto KUvRf; nRNKg: b07Vm: goto H_wU_; L7AoN: $id_level = $this->input->get("\151\144"); goto zebox; Tupdn: $data["\151\x64\137\154\x65\166\x65\154"] = ''; goto l_lIL; w55ey: hLmNT: goto L7AoN; cLmgs: goto GInWi; goto g_dk2; sOed5: $data["\x69\x64\137\155\x61\160\145\154"] = $id_mapel; goto RWNQA; KUvRf: DMMvR: goto Y1gJJ; Vz5UR: $data["\164\x6f\x74\x61\x6c\x5f\x73\x69\x73\x77\x61"] = $jadwal_terpakai; goto L0uUZ; XwabP: $data["\x6d\x6f\x64\x65"] = $mode == null ? "\x31" : $mode; goto Y61lS; wqXNN: OyyH4: goto m16oX; u0SrS: $data["\x61\144\141\x5f\x75\x6a\x69\141\156"] = $this->cbt->getDataJadwalByTgl(date("\131\x2d\155\x2d\x64")); goto Q2U12; PFOvj: goto PbQ2x; goto wqXNN; tzEuP: $id_guru = $this->input->get("\151\x64"); goto H_qpD; IdmOZ: $data["\x6b\145\154\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto Wkmx_; oAYQK: if ($type == "\x33") { goto hLmNT; } goto dO8_X; kzoho: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto LwdzX; lON3q: $data["\152\x61\x64\x77\x61\154\163"] = $this->cbt->getAllDataJadwal($guru->id_guru); goto xM2mR; tfqpQ: $data["\x69\144\x5f\x67\x75\x72\165"] = ''; goto Y2XUc; jY_n0: $data["\x69\x64\137\155\x61\160\x65\x6c"] = $id_mapel; goto DdR0g; PSr5e: goto PbQ2x; goto b3MVH; S04z7: $data["\x66\x69\154\164\x65\x72\x73"] = ["\x30" => "\123\145\155\x75\x61", "\x31" => "\107\165\x72\165", "\x32" => "\115\x61\160\x65\154", "\63" => "\114\145\x76\145\x6c"]; goto koOzQ; UG2E8: $data["\151\x64\137\x6c\145\x76\145\x6c"] = $id_level; goto ynhrF; g_dk2: Jbl7R: goto tzEuP; esJU8: $data["\152\x61\x64\167\141\x6c\163"] = $this->cbt->getAllDataJadwal($id_guru); goto fjbkL; CVO4v: $this->load->model("\x44\x61\x73\x68\142\157\x61\162\x64\137\155\x6f\x64\x65\154", "\144\141\163\150\x62\x6f\x61\162\144"); goto p13ZQ; v8H2A: if ($type == "\62") { goto OyyH4; } goto ruNSO; fjbkL: $data["\151\144\137\155\x61\160\x65\154"] = ''; goto biQS2; w0dcp: $data["\x69\144\x5f\155\141\160\x65\154"] = null; goto ecEBV; H_qpD: $data["\151\x64\137\147\x75\162\x75"] = $id_guru; goto esJU8; mY3Oo: uZs1D: goto KapWy; NyKyL: $this->load->view("\155\x65\155\x62\x65\162\163\57\147\x75\x72\165\x2f\164\145\x6d\x70\154\141\164\x65\x73\x2f\146\157\157\164\145\162"); goto MyBGF; D7tGD: $data["\x73\155\164\x5f\x61\143\x74\x69\166\x65"] = $smt; goto BB9Ix; J8SfC: $data["\155\x61\x70\x65\154\x73"] = $arrMapel; goto l0U_O; qw2Su: $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\x65\x73\x2f\x64\x61\163\x68\142\x6f\x61\162\x64\57\x5f\x68\145\x61\144\x65\162", $data); goto O5szQ; Q2U12: $data["\x6c\x65\166\145\154\163"] = $this->dropdown->getAllLevel($setting->jenjang); goto IdmOZ; biQS2: $data["\x69\144\137\154\x65\166\145\x6c"] = ''; goto Gg0am; Bwmrf: $data["\160\x72\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto LBCi0; ea7lE: $data["\x69\x64\x5f\x6d\x61\x70\145\x6c"] = ''; goto ymAWX; MyBGF: goto YHcdz; goto QSpSx; p13ZQ: $this->load->model("\x4b\x65\x6c\141\163\x5f\x6d\157\x64\145\x6c", "\x6b\x65\x6c\x61\163"); goto HHMLm; TyCoZ: $this->load->view("\155\x65\x6d\142\145\162\x73\x2f\x67\x75\162\x75\x2f\164\145\155\160\154\x61\x74\x65\163\57\x68\x65\141\x64\145\x72", $data); goto rDhWO; APnZj: YHcdz: goto snUoQ; LBCi0: $data["\x67\165\x72\x75\163"] = $this->dropdown->getAllGuru(); goto O2fWH; Ryoe1: EKjPC: goto J8SfC; O2fWH: $data["\x6d\x61\160\x65\154\x73"] = $this->dropdown->getAllMapel(); goto S04z7; O5szQ: $this->load->view("\143\142\164\x2f\x6a\141\144\x77\x61\154\x2f\x64\x61\x74\141"); goto Si2c3; GLw3G: $data["\164\x70"] = $this->dashboard->getTahun(); goto uxgj1; ynhrF: $data["\152\141\144\x77\141\x6c\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru, null, $id_level); goto FiwqW; dO8_X: $data["\151\144\137\147\x75\162\165"] = null; goto z0ARo; bhrlN: $data["\151\144\x5f\147\165\x72\165"] = ''; goto Tupdn; QSpSx: iYZOi: goto Bwmrf; MSuyh: $tp = $this->dashboard->getTahunActive(); goto MjfI3; K70QO: $data["\151\x64\137\x66\151\x6c\164\x65\x72"] = $type == null ? '' : $type; goto sFRYv; rDhWO: $this->load->view("\143\142\x74\x2f\x6a\x61\144\167\x61\x6c\57\x64\141\x74\x61"); goto NyKyL; Si2c3: $this->load->view("\x5f\164\x65\x6d\x70\154\x61\x74\x65\163\x2f\x64\141\x73\x68\142\157\141\162\x64\x2f\137\146\x6f\157\164\145\162"); goto APnZj; KapWy: $data["\152\x61\x64\167\141\154\x73"] = $this->cbt->getAllDataJadwal(); goto EOqkT; l0U_O: $data["\146\151\x6c\164\x65\x72\163"] = ["\x30" => "\123\145\x6d\x75\x61", "\x32" => "\115\x61\x70\145\154", "\63" => "\x4c\145\166\x65\154"]; goto K70QO; uxgj1: $data["\x74\160\137\141\143\164\151\166\145"] = $tp; goto GIe26; pJxh8: $data["\152\141\x64\167\141\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto h6jRN; koOzQ: $data["\x69\x64\137\x66\151\x6c\164\145\162"] = $type == null ? '' : $type; goto zxVz4; l_lIL: goto PbQ2x; goto nRNKg; xM2mR: $data["\151\x64\137\147\165\162\x75"] = null; goto CKbXe; CKbXe: $data["\x69\144\x5f\x6d\x61\x70\145\154"] = null; goto ieJoc; MgSz9: $data["\151\x64\137\x6c\145\166\x65\154"] = null; goto OfuCf; RWNQA: $data["\152\141\144\167\x61\154\163"] = $this->cbt->getAllDataJadwal($guru->id_guru, $id_mapel); goto bhrlN; JQ8sG: u7mN5: goto Vz5UR; zxVz4: if ($type == "\60") { goto uZs1D; } goto x49Du; Y1gJJ: $id_mapel = $this->input->get("\x69\x64"); goto jY_n0; gBFps: $user = $this->ion_auth->user()->row(); goto e7nw2; Y2XUc: $data["\x69\144\x5f\x6d\x61\160\x65\154"] = ''; goto jUw6E; ug20P: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; QNcH5: } goto Ryoe1; ep5X_: $data["\x67\x75\x72\x75"] = $guru; goto W3234; H_wU_: $id_level = $this->input->get("\x69\x64"); goto UG2E8; LwdzX: $arrMapel = []; goto ug20P; ymAWX: PbQ2x: goto TyCoZ; AyDYg: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ep5X_; m16oX: $id_mapel = $this->input->get("\x69\x64"); goto sOed5; sFRYv: if ($type == "\60") { goto dpyJl; } goto v8H2A; MjfI3: $smt = $this->dashboard->getSemesterActive(); goto GLw3G; qSt2c: $data["\152\x6d\154\115\x61\x70\x65\154"] = []; goto RqUbf; W3234: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto kzoho; ruNSO: if ($type == "\63") { goto b07Vm; } goto GH1Gp; GH1Gp: $data["\151\144\137\147\165\x72\x75"] = null; goto ROpfP; AMlIs: goto GInWi; goto w55ey; TFxOZ: $terpakai = $this->cbt->getJadwalTerpakai(); goto SaDL6; I9Hrm: $data["\x69\144\137\x6c\x65\166\145\154"] = null; goto PSr5e; h6jRN: $data["\152\155\x6c\x49\163\164"] = []; goto qSt2c; SEf9h: $data["\151\x64\137\x6c\x65\166\x65\x6c"] = ''; goto AMlIs; e7nw2: $setting = $this->dashboard->getSetting(); goto hljcy; ROpfP: $data["\x69\x64\x5f\155\141\160\145\154"] = null; goto I9Hrm; oA0bZ: if ($type == "\x32") { goto DMMvR; } goto oAYQK; DdR0g: $data["\x6a\x61\x64\x77\x61\x6c\163"] = $this->cbt->getAllDataJadwal(null, $id_mapel); goto g5914; xkzlV: $data["\x6a\145\x6e\151\x73"] = $this->cbt->getAllJenisUjian(); goto pJxh8; SaDL6: $jadwal_terpakai = []; goto cE55h; Y61lS: $data["\162\165\x61\156\147\163"] = $this->cbt->getAllRuang(); goto JD0hw; EOqkT: $data["\x69\x64\137\147\x75\162\165"] = null; goto w0dcp; BB9Ix: $mode = $this->input->get("\155\x6f\x64\x65"); goto gTRi1; zebox: $data["\151\144\137\154\x65\166\145\154"] = $id_level; goto giwOf; ieJoc: $data["\x69\x64\137\x6c\x65\x76\145\154"] = null; goto PFOvj; hljcy: $data = ["\165\x73\x65\162" => $user, "\x6a\165\144\x75\x6c" => "\112\141\144\167\x61\154\40\x50\x65\156\x69\x6c\141\151\x61\x6e", "\x73\165\142\152\165\144\x75\154" => "\x50\110\57\x50\x54\123\57\x50\101\124\57\125\123\102\113", "\x73\145\x74\x74\151\156\147" => $setting]; goto MSuyh; z0ARo: $data["\151\x64\x5f\x6d\141\x70\x65\154"] = null; goto MgSz9; FiwqW: $data["\x69\x64\137\147\165\x72\165"] = ''; goto ea7lE; EQv7Y: $this->load->model("\x43\142\x74\137\x6d\157\144\145\154", "\x63\x62\164"); goto CVO4v; Wkmx_: if ($this->ion_auth->is_admin()) { goto iYZOi; } goto AyDYg; GIe26: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto D7tGD; jUw6E: GInWi: goto qw2Su; RqUbf: $data["\x6c\145\x76\145\x6c"] = $level; goto L_IW9; b3MVH: dpyJl: goto lON3q; g5914: $data["\151\144\137\147\x75\x72\x75"] = ''; goto SEf9h; snUoQ: } public function add($id_jadwal) { goto nCZl2; BvLAz: $data["\163\x65\x73\x69\x73"] = $this->dropdown->getAllSesi(); goto d8EPU; hdncS: $arrMapel = []; goto YNcZ8; zYT5L: $data["\152\141\x64\167\x61\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto T2u0K; i7Qm1: if ($id_jadwal == 0) { goto b7Ue1; } goto XHP_q; VF85s: $this->load->view("\x6d\145\155\142\145\162\x73\x2f\147\165\x72\x75\57\164\x65\x6d\x70\154\141\x74\x65\x73\57\x68\x65\x61\144\145\x72", $data); goto RNAF9; sM2dO: $data["\155\141\160\145\x6c"] = $this->dropdown->getAllMapel(); goto N6e5i; Bza_k: $this->load->model("\104\x72\157\160\x64\x6f\x77\156\137\155\157\144\145\x6c", "\x64\x72\157\x70\x64\x6f\167\156"); goto tb7ht; E2Ghj: $data["\163\x6d\164\137\141\143\164\151\x76\x65"] = $smt; goto i7Qm1; pDULv: $user = $this->ion_auth->user()->row(); goto J9OiE; higYb: b7Ue1: goto zYT5L; JZBbe: wfRnY: goto C8a4V; Kdzid: $gurus = $this->dropdown->getAllGuru(); goto SlqRl; Id3L1: $this->load->view("\x6d\145\x6d\x62\145\x72\163\57\x67\165\x72\165\57\x74\145\x6d\160\x6c\141\164\x65\163\x2f\146\157\x6f\164\145\x72"); goto pD3go; zBPr9: $this->load->model("\x44\x61\x73\150\142\157\141\x72\x64\137\155\157\x64\145\x6c", "\144\x61\163\150\142\157\141\x72\x64"); goto boGRs; T2u0K: ui0zy: goto Kdzid; j0chL: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto hdncS; SlqRl: $data["\x72\x75\x61\156\x67\x73"] = $this->cbt->getAllRuang(); goto BvLAz; boGRs: $this->load->model("\113\145\154\x61\163\137\155\x6f\x64\145\154", "\153\145\x6c\141\163"); goto Bza_k; L4DlQ: $data["\164\160"] = $this->dashboard->getTahun(); goto HRpaO; bS3eV: $this->load->view("\x5f\164\145\x6d\160\154\x61\164\x65\x73\57\144\x61\163\x68\142\157\x61\x72\144\57\x5f\x66\x6f\157\x74\145\162"); goto I4tew; tb7ht: $enable = $this->input->get("\x65\x6e\141\x62\x6c\x65", true); goto pDULv; YuA3o: goto ui0zy; goto higYb; NKUb4: $data["\147\165\162\x75"] = $guru; goto ItIYS; l1Q_q: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto NKUb4; pD3go: goto ArZzF; goto ong5z; XHP_q: $data["\x6a\141\144\x77\141\154"] = $this->cbt->getJadwalById($id_jadwal); goto YuA3o; FZqZb: $data["\x64\x69\163\141\x62\x6c\x65\x5f\x6f\x70\x73\151"] = $enable != null && $enable == 1; goto jveJ7; QJDf2: $tp = $this->dashboard->getTahunActive(); goto tDbmV; RNAF9: $this->load->view("\x63\x62\164\57\x6a\141\144\x77\141\x6c\x2f\x61\x64\x64"); goto Id3L1; d8EPU: $data["\152\x65\156\x69\163"] = $this->cbt->getAllJenisUjian(); goto dRTKw; tDbmV: $smt = $this->dashboard->getSemesterActive(); goto L4DlQ; N6e5i: $this->load->view("\x5f\164\x65\155\160\x6c\141\x74\x65\163\x2f\x64\x61\163\150\x62\157\x61\x72\x64\x2f\x5f\x68\145\141\144\145\162", $data); goto vTbtm; vTbtm: $this->load->view("\x63\x62\x74\57\x6a\x61\x64\167\x61\x6c\x2f\141\x64\144"); goto bS3eV; jveJ7: if ($this->ion_auth->is_admin()) { goto MyI2N; } goto l1Q_q; C8a4V: $data["\x6d\141\x70\145\154"] = $arrMapel; goto VF85s; YNcZ8: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; Dx13c: } goto JZBbe; J9OiE: $data = ["\165\x73\145\162" => $user, "\x6a\x75\144\x75\x6c" => $id_jadwal == 0 ? "\124\141\x6d\x62\141\x68\40\112\141\x64\167\141\154\x20\125\152\151\141\x6e" : "\105\144\x69\x74\40\112\x61\144\x77\141\x6c\40\125\x6a\x69\141\x6e", "\x73\165\142\x6a\x75\144\165\154" => "\112\x61\x64\x77\x61\x6c", "\x73\x65\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto QJDf2; HRpaO: $data["\x74\160\x5f\x61\x63\x74\x69\x76\x65"] = $tp; goto wDP49; ong5z: MyI2N: goto pv1gp; nCZl2: $this->load->model("\x43\142\x74\x5f\155\x6f\x64\x65\x6c", "\143\x62\x74"); goto zBPr9; pv1gp: $data["\160\162\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto taxMk; ItIYS: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto j0chL; wDP49: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto E2Ghj; I4tew: ArZzF: goto CrNlD; dRTKw: $data["\153\x65\154\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto FZqZb; taxMk: $data["\147\165\162\165"] = $gurus; goto sM2dO; CrNlD: } public function getBankMapel($id_mapel) { goto I95J4; G83Hg: $smt = $this->dashboard->getSemesterActive(); goto TnX0L; V_6_N: scISS: goto sIXpQ; TnX0L: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto MBNHW; MBNHW: $filtered = []; goto fyEpb; sIXpQ: $this->output_json($filtered); goto Iehw_; gyU3C: $tp = $this->dashboard->getTahunActive(); goto G83Hg; gCIi3: $this->load->model("\x44\141\163\150\142\x6f\141\162\144\x5f\155\157\x64\145\154", "\144\x61\163\150\142\157\x61\x72\144"); goto gyU3C; I95J4: $this->load->model("\103\x62\x74\137\155\157\144\145\154", "\x63\x62\x74"); goto gCIi3; fyEpb: foreach ($banks as $key => $bank) { goto RYLZr; QDtB2: $num3 = isset($cek_soal["\63"]) ? count($cek_soal["\63"]) : 0; goto Vx7JN; J1goa: aAd2A: goto rjgwn; RYLZr: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto B4XVP; HF3SH: $ada5 = $num5 == (int) $bank->tampil_esai; goto EIm1q; tp0QC: $ada1 = $num1 == (int) $bank->tampil_pg; goto CmzBh; B4XVP: $num1 = isset($cek_soal["\61"]) ? count($cek_soal["\61"]) : 0; goto F5qBy; cj65_: $num5 = isset($cek_soal["\65"]) ? count($cek_soal["\65"]) : 0; goto tp0QC; F5qBy: $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\x32"]) : 0; goto QDtB2; Vx7JN: $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\64"]) : 0; goto cj65_; Pw3l_: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto OA4xC; RIH62: $filtered[$key] = $bank->bank_kode; goto J1goa; EIm1q: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto aAd2A; } goto RIH62; OA4xC: $ada4 = $num4 == (int) $bank->tampil_isian; goto HF3SH; CmzBh: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto Pw3l_; rjgwn: S26yi: goto NzC_O; NzC_O: } goto V_6_N; Iehw_: } public function saveJadwal() { goto jxcif; ukmP8: goto ecJx6; goto Ya0V6; CkXXm: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto mxNke; hmjkJ: $this->load->model("\x44\141\163\150\142\x6f\141\162\144\137\x6d\x6f\144\x65\154", "\x64\x61\x73\150\142\157\x61\x72\144"); goto KStSj; OuLWr: mTJQb: goto CkXXm; UI8SG: if (!$id) { goto SoR6R; } goto tVuJ4; jxcif: $this->load->model("\103\142\x74\137\155\x6f\x64\145\154", "\x63\x62\x74"); goto hmjkJ; EsuMg: $id = $this->input->post("\x69\144\x5f\152\x61\144\167\x61\154", true); goto UI8SG; tVuJ4: $this->logging->saveLog(4, "\x6d\145\x6e\x67\145\x64\x69\x74\40\x6a\141\144\x77\x61\154\x20\160\145\154\141\152\x61\x72\141\x6e"); goto ukmP8; Pl5YR: fXGFf: goto WuuZT; AKPi2: $data["\155\145\163\x73\141\x67\x65"] = "\x4b\145\x73\x61\154\x61\x68\141\x6e\x20\64\x30\x34"; goto dwN3B; lwHhs: $status = $res; goto Pl5YR; vilZW: $smt = $this->dashboard->getSemesterActive(); goto ixQLz; KStSj: $this->load->model("\x4c\157\147\x5f\155\157\x64\x65\x6c", "\154\x6f\147\x67\x69\x6e\147"); goto qDtGY; Ya0V6: SoR6R: goto jcNnb; qDtGY: $tp = $this->dashboard->getTahunActive(); goto vilZW; jcNnb: $this->logging->saveLog(3, "\x6d\145\156\x61\155\142\141\150\40\x6a\x61\144\x77\x61\154\x20\x70\145\154\x61\x6a\141\x72\141\156"); goto EnwmQ; EnwmQ: ecJx6: goto Jaz6A; mxNke: $data["\155\145\163\163\141\147\145"] = $res ? "\x4a\141\144\167\x61\x6c\x20\x62\145\x72\x68\141\163\x69\154\40\x64\151\x73\x69\155\x70\x61\x6e" : "\112\x61\144\x77\141\154\x20\163\165\144\141\150\40\141\144\x61"; goto lwHhs; WuuZT: $data["\163\x75\x63\x63\x65\163\163"] = $status; goto EsuMg; ixQLz: if ($this->input->post()) { goto mTJQb; } goto AKPi2; dwN3B: $status = FALSE; goto UW8q2; Jaz6A: $this->output_json($data); goto LBP45; UW8q2: goto fXGFf; goto OuLWr; LBP45: } public function deleteJadwal() { goto pIcwS; CmaK2: if ($this->master->delete("\143\x62\x74\x5f\152\141\144\167\141\x6c", $id, "\151\x64\137\x6a\141\144\167\141\x6c")) { goto hI9QU; } goto b4tst; MqyBF: $hapusDurasiSiswa = $this->master->delete("\143\142\164\137\144\x75\x72\141\x73\151\x5f\163\x69\x73\x77\x61", $id, "\151\144\137\x6a\x61\x64\167\141\154"); goto xxaki; UOVyZ: $data["\x73\164\141\x74\165\x73"] = false; goto yJj4d; yJj4d: $jadwal = $this->cbt->getJadwalById($id); goto kWJIJ; tlAWI: $data["\x6d\x65\163\163\x61\147\x65"] = "\x4a\141\x64\x77\141\x6c\x20\125\x6a\x69\141\156\40\x73\145\x64\x61\x6e\x67\x20\144\x69\147\165\156\141\x6b\x61\156"; goto XSX70; b4tst: $data["\163\164\141\x74\165\163"] = false; goto tlAWI; hNvRG: $data["\x6d\x65\x73\163\x61\147\x65"] = "\x62\x65\162\x68\141\163\x69\154"; goto HC0_Q; N33wS: $hapusNilaiSiswa = $this->master->delete("\143\x62\x74\137\x73\x6f\141\154\137\163\151\163\x77\141", $id, "\x69\x64\x5f\x6a\x61\x64\x77\141\154"); goto MqyBF; lNxpq: $id = $this->input->get("\151\x64\137\x6a\x61\x64\167\x61\x6c", true); goto imqrd; xxaki: $this->logging->saveLog(5, "\155\145\x6e\147\150\x61\x70\x75\x73\x20\x6a\141\144\167\x61\x6c\40\x75\152\x69\x61\156"); goto XpZBY; pIcwS: $this->load->model("\115\x61\163\x74\x65\162\137\155\x6f\144\x65\154", "\155\x61\163\x74\x65\x72"); goto eutI3; imqrd: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto uBfWT; HC0_Q: pzdfy: goto Xcs65; SGKvx: $data["\163\x74\x61\164\x75\163"] = false; goto dgFox; Xcs65: goto UXnNT; goto IZqTf; eutI3: $this->load->model("\103\142\164\137\155\x6f\x64\x65\x6c", "\x63\x62\x74"); goto KUm3d; dgFox: $data["\155\x65\163\163\141\x67\145"] = "\x48\141\163\x69\x6c\x20\x55\x6a\x69\141\156\40\142\x65\154\165\155\x20\144\151\162\x65\x6b\141\x70"; goto a7ci6; IZqTf: X9kWm: goto SGKvx; uBfWT: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto UOVyZ; XpZBY: $data["\x73\x74\x61\x74\165\x73"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto hNvRG; KUm3d: $this->load->model("\114\x6f\x67\x5f\x6d\x6f\144\145\154", "\x6c\157\147\x67\151\156\x67"); goto lNxpq; a7ci6: UXnNT: goto ibnfs; kWJIJ: if ($terpakai && $jadwal->rekap == 0) { goto X9kWm; } goto CmaK2; ibnfs: $this->output_json($data); goto tmYoU; LD3mt: hI9QU: goto N33wS; XSX70: goto pzdfy; goto LD3mt; tmYoU: } public function deleteAllJadwal() { goto zBYod; qL1tq: ob_end_clean(); goto pA9E4; qxHyV: $this->load->model("\114\x6f\147\x5f\155\157\144\145\x6c", "\154\x6f\x67\x67\x69\156\x67"); goto EMLC9; YtU8C: JLZRH: goto Gxkbr; RxmhK: ob_start(); goto axNyP; KgIFC: Iqw3H: goto BOBVe; j9VJG: ob_end_clean(); goto V4wdy; zBYod: $this->load->model("\x4d\x61\x73\164\x65\x72\137\x6d\x6f\144\145\x6c", "\x6d\x61\163\x74\145\162"); goto PhaNq; pA9E4: $data["\163\164\141\164\x75\x73"] = false; goto tmMQi; Vq4SN: wtUQD: goto wZdtV; PhaNq: $this->load->model("\x43\x62\x74\137\155\x6f\144\x65\x6c", "\x63\x62\164"); goto qxHyV; V4wdy: $data["\163\x74\x61\164\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto fIK_i; t8UIX: foreach ($jadwals as $jadwal) { goto w3qEf; yBgwR: array_push($digunakan, $terpakai); goto QmCGV; lYvkc: array_push($backuped, $jadwal->rekap); goto yBgwR; w3qEf: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto lYvkc; QmCGV: UQULO: goto n0LNM; n0LNM: } goto Vq4SN; jQ9bu: $data["\163\x74\141\x74\165\x73"] = false; goto vNLLj; rOPTW: $data["\x64\x69\147\x75\x6e\x61\153\x61\156"] = $count_terpakai; goto ux8Vr; tmMQi: $data["\x6d\x65\163\x73\141\147\x65"] = "\x4a\x61\x64\167\141\x6c\x20\125\152\x69\x61\x6e\x20\163\x65\x64\x61\156\147\x20\x64\x69\147\165\x6e\141\x6b\x61\156"; goto MY9Fl; IM1H5: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto HFcaM; wZdtV: $count_terpakai = array_count_values($digunakan); goto AsJy9; EUnBE: $digunakan = []; goto t8UIX; AsJy9: $counts = array_count_values($backuped); goto Kw_wo; XQ8Q3: $hapusDurasiSiswa = $this->master->delete("\143\142\164\x5f\144\x75\162\141\x73\151\137\163\x69\x73\167\141", $arrId, "\x69\144\137\x6a\x61\144\167\x61\x6c"); goto iTx1k; EMLC9: $arrId = json_decode($this->input->post("\x63\x68\145\143\x6b\145\144", true)); goto RxmhK; BOBVe: goto n15vh; goto ETFUj; fIK_i: $data["\155\x65\x73\163\141\x67\145"] = "\x62\145\x72\150\x61\x73\x69\154"; goto KgIFC; HFcaM: $backuped = []; goto EUnBE; Kw_wo: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto R94QV; } goto kTv01; kTv01: if ($this->master->delete("\x63\x62\164\137\x6a\141\x64\x77\x61\x6c", $arrId, "\x69\x64\x5f\x6a\141\144\x77\141\x6c")) { goto JLZRH; } goto qL1tq; axNyP: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto IM1H5; OmNk4: ob_end_clean(); goto jQ9bu; Gxkbr: $hapusNilaiSiswa = $this->master->delete("\x63\x62\164\137\x73\x6f\x61\154\x5f\x73\151\x73\167\x61", $arrId, "\x69\144\x5f\x6a\141\144\167\141\x6c"); goto XQ8Q3; OL2lM: $this->output_json($data); goto B1U2h; mrn7T: n15vh: goto rOPTW; ux8Vr: $data["\x62\141\143\x6b\165\160"] = $counts; goto OL2lM; ETFUj: R94QV: goto OmNk4; vNLLj: $data["\x6d\145\163\163\x61\x67\x65"] = "\110\141\x73\x69\x6c\40\x55\x6a\151\141\x6e\40\x62\x65\x6c\165\x6d\40\144\151\162\x65\x6b\141\x70"; goto mrn7T; iTx1k: $this->logging->saveLog(5, "\x6d\145\156\x67\x68\141\x70\x75\x73\40\152\141\x64\167\x61\x6c\x20\x75\152\151\x61\x6e"); goto j9VJG; MY9Fl: goto Iqw3H; goto YtU8C; B1U2h: } }
