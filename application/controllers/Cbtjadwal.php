<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjadwal extends CI_Controller { public function __construct() { goto bTCWT; CpOJl: if (!$this->ion_auth->logged_in()) { goto WhDii; } goto r7U_g; bTCWT: parent::__construct(); goto CpOJl; Jl8xM: $this->form_validation->set_error_delimiters('', ''); goto V0Scl; OAEMZ: $this->load->model("\x4d\x61\x73\164\145\162\137\x6d\x6f\144\145\154", "\x6d\x61\163\164\145\162"); goto uoQmw; i1p2T: $this->load->model("\x4b\x65\x6c\x61\x73\x5f\155\x6f\x64\145\x6c", "\x6b\x65\x6c\141\x73"); goto IgEZZ; r7U_g: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) { goto xZXj3; } goto NkTCD; pYOF9: $this->load->library(["\x64\141\164\141\x74\141\142\x6c\x65\x73", "\x66\x6f\x72\155\x5f\166\141\x6c\151\144\x61\164\x69\x6f\x6e"]); goto OAEMZ; bnwo0: xZXj3: goto UCETP; UCETP: goto n21ck; goto eaA5N; yeeB2: $this->load->model("\103\142\x74\137\x6d\157\x64\145\x6c", "\143\142\x74"); goto H20zr; eaA5N: WhDii: goto iSnoP; iSnoP: redirect("\141\165\164\x68"); goto Ox3EN; Ox3EN: n21ck: goto pYOF9; H20zr: $this->load->model("\x4c\157\147\x5f\x6d\x6f\144\x65\154", "\x6c\x6f\x67\x67\x69\x6e\147"); goto i1p2T; uoQmw: $this->load->model("\104\141\x73\x68\x62\x6f\141\x72\x64\x5f\x6d\x6f\144\145\x6c", "\x64\141\163\x68\x62\157\141\x72\x64"); goto yeeB2; IgEZZ: $this->load->model("\104\x72\x6f\x70\x64\157\x77\156\x5f\155\157\144\x65\154", "\x64\x72\x6f\160\x64\157\x77\156"); goto Jl8xM; NkTCD: show_error("\x48\x61\x6e\171\141\x20\101\x64\x6d\x69\x6e\x69\163\x74\162\x61\164\x6f\x72\40\x64\141\156\x20\x67\165\x72\x75\40\x79\141\x6e\x67\40\144\x69\142\x65\162\151\x20\150\141\x6b\40\x75\x6e\164\x75\153\40\x6d\x65\156\147\x61\153\x73\x65\163\x20\150\141\x6c\141\x6d\141\156\40\x69\156\x69\54\40\74\141\40\150\162\x65\146\75\42" . base_url("\x64\141\x73\x68\x62\x6f\141\162\x64") . "\x22\76\x4b\145\x6d\x62\x61\154\151\x20\x6b\145\x20\x6d\145\x6e\x75\x20\141\x77\x61\x6c\x3c\57\x61\76", 403, "\x41\153\163\x65\163\x20\124\x65\x72\x6c\141\x72\x61\156\x67"); goto bnwo0; V0Scl: } public function output_json($data, $encode = true) { goto Epxu2; Epxu2: if (!$encode) { goto Qr0oq; } goto IYXwW; IYXwW: $data = json_encode($data); goto BQUdv; q3Pbu: $this->output->set_content_type("\141\160\160\x6c\x69\x63\141\x74\151\x6f\x6e\57\x6a\163\x6f\156")->set_output($data); goto f5pMU; BQUdv: Qr0oq: goto q3Pbu; f5pMU: } public function index() { goto b9C5G; M85zA: $data["\151\144\137\154\145\x76\x65\x6c"] = null; goto y9sam; e4NeJ: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto kTxpQ; mBtV8: $id_level = $this->input->get("\151\x64"); goto EGNUf; ZCCI2: $data["\x73\155\x74\137\141\143\x74\151\x76\x65"] = $smt; goto c8jSl; HFKtd: $data["\x69\144\x5f\x6d\141\160\x65\x6c"] = $id_mapel; goto l9wpr; jEtf9: $data["\152\x61\x64\x77\x61\154\163"] = $this->cbt->getAllDataJadwal($guru->id_guru); goto iJzXJ; lUHqb: $data["\151\x64\x5f\155\141\160\x65\154"] = ''; goto P0UKF; ByyMY: $data["\151\x64\x5f\154\145\166\145\x6c"] = $id_level; goto VZdW3; L6zBo: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto MjpAh; ufKzW: rm7Ci: goto Huc2N; bR1fc: $data["\x74\x6f\x74\141\154\137\163\x69\x73\167\141"] = $jadwal_terpakai; goto bRIE7; fW5uS: goto pR5au; goto mRXLw; imnmb: $data["\x74\x70"] = $this->dashboard->getTahun(); goto MpN4l; Uf1xm: $data["\x69\x64\x5f\154\x65\x76\145\154"] = ''; goto nf1g9; R5kuP: $data["\147\x75\x72\165\x73"] = $this->dropdown->getAllGuru(); goto emFNI; B95vc: oe6GY: goto cqYS5; mRXLw: EikWY: goto NnNER; IlbSM: $data["\151\x64\x5f\147\165\x72\x75"] = null; goto BOvgz; A8pVN: $data["\x69\144\x5f\x6c\145\166\145\154"] = null; goto fW5uS; PQNPJ: goto pR5au; goto WoGdp; cD28T: $data["\x72\x75\x61\x6e\x67\x73"] = $this->cbt->getAllRuang(); goto J8ySP; MjpAh: $data["\147\x75\162\165"] = $guru; goto e4NeJ; bqLTB: $data["\146\x69\154\164\x65\162\x73"] = ["\x30" => "\123\145\x6d\x75\141", "\61" => "\x47\x75\162\165", "\x32" => "\115\141\160\145\x6c", "\63" => "\x4c\x65\x76\145\x6c"]; goto Fnzzz; emFNI: $data["\x6d\x61\160\x65\x6c\163"] = $this->dropdown->getAllMapel(); goto bqLTB; bdRqk: if ($type == "\62") { goto Po_7V; } goto Ei972; NnNER: $data["\x6a\141\144\167\x61\x6c\x73"] = $this->cbt->getAllDataJadwal(); goto hOqoV; UcZkO: $data["\x6a\141\x64\167\x61\154\163"] = $this->cbt->getAllDataJadwal($id_guru); goto cSq2R; TPOAA: if ($type == "\x30") { goto EikWY; } goto BYbgN; kDwk9: $data["\x69\x64\x5f\147\x75\x72\165"] = ''; goto Uf1xm; JuOQo: $data["\x66\151\154\x74\x65\162\x73"] = ["\x30" => "\x53\x65\x6d\165\x61", "\62" => "\115\141\x70\x65\154", "\x33" => "\x4c\145\x76\145\x6c"]; goto ddRTe; ef3Od: $id_level = $this->input->get("\x69\x64"); goto ByyMY; WWrY2: $jadwal_terpakai = []; goto rUjYr; vMo4t: $id_guru = $this->input->get("\x69\144"); goto AQ9Zi; qDX9i: $data["\x6a\141\144\167\x61\x6c\163"] = $this->cbt->getAllDataJadwal($guru->id_guru, null, $id_level); goto nnDWZ; ZPOC8: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto ZCCI2; kTxpQ: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto QEsZw; vxCIi: uwI5I: goto jEtf9; U7eSl: $data["\151\144\137\x6d\141\160\x65\x6c"] = $id_mapel; goto sfPpP; G2xUJ: $data["\152\x6d\x6c\x4d\141\160\x65\154"] = []; goto LUGws; qPpm6: goto Dnjvl; goto RWGbq; Ei972: if ($type == "\63") { goto GWdVP; } goto PRHlL; m1LU3: $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\x74\x65\163\x2f\144\141\163\x68\142\157\x61\x72\144\x2f\x5f\x66\x6f\x6f\164\145\x72"); goto UgkVi; EGNUf: $data["\151\144\x5f\154\145\x76\x65\x6c"] = $id_level; goto qDX9i; jdp9F: $data["\151\x64\137\154\x65\x76\145\x6c"] = ''; goto cpKo3; h75vr: $data["\x69\x64\x5f\147\x75\162\165"] = ''; goto lUHqb; MpN4l: $data["\x74\160\137\x61\x63\164\x69\x76\145"] = $tp; goto ZPOC8; iBxzL: $data["\151\x64\x5f\155\141\x70\145\154"] = ''; goto B95vc; LI2aH: $data["\x69\144\137\155\x61\x70\145\154"] = null; goto M85zA; zCs1a: $type = $this->input->get("\164\x79\160\145"); goto DXmra; nf1g9: goto oe6GY; goto rg5lQ; VZdW3: $data["\x6a\x61\144\167\x61\154\163"] = $this->cbt->getAllDataJadwal(null, null, $id_level); goto h75vr; LUGws: $data["\x6c\145\x76\x65\x6c"] = $level; goto UQSdo; RWGbq: GwUxN: goto CSyy3; LaSP0: goto pR5au; goto HU1uP; UQSdo: $terpakai = $this->cbt->getJadwalTerpakai(); goto WWrY2; j0m4G: $data["\x6a\145\x6e\x69\x73"] = $this->cbt->getAllJenisUjian(); goto JBV4q; rUjYr: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); a_Ui7: } goto eYuSk; DXmra: $data["\x6d\x6f\x64\x65"] = $mode == null ? "\61" : $mode; goto cD28T; P0UKF: pR5au: goto h4ODY; c8jSl: $mode = $this->input->get("\155\157\x64\x65"); goto zCs1a; qV28D: $id_mapel = $this->input->get("\151\x64"); goto U7eSl; BYbgN: if ($type == "\x31") { goto RsLS3; } goto XPZIE; h4ODY: $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\x65\x73\x2f\144\141\x73\150\142\157\x61\162\x64\57\x5f\x68\145\x61\x64\145\162", $data); goto cDm2Q; ddRTe: $data["\151\144\x5f\x66\x69\154\164\x65\x72"] = $type == null ? '' : $type; goto MU25m; cSq2R: $data["\x69\x64\137\x6d\x61\x70\x65\x6c"] = ''; goto NmlyL; B6X_u: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; qKTQ8: } goto ufKzW; Q7J0D: $data["\x6b\x65\154\x61\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto ANUx1; uQiRW: OjULB: goto ef3Od; eYuSk: lMyXE: goto bR1fc; VKy4k: goto oe6GY; goto vxCIi; ANUx1: if ($this->ion_auth->is_admin()) { goto GwUxN; } goto L6zBo; J8ySP: $data["\163\145\x73\x69\163"] = $this->dropdown->getAllSesi(); goto j0m4G; b9C5G: $lvl = $this->input->get("\x6c\x65\166\x65\154", true); goto DmSYP; PRHlL: $data["\x69\144\x5f\147\165\x72\x75"] = null; goto WmHmT; uld9H: $tp = $this->dashboard->getTahunActive(); goto x1a5Z; cDm2Q: $this->load->view("\143\x62\164\x2f\x6a\x61\x64\167\x61\x6c\57\144\141\164\141"); goto m1LU3; sfPpP: $data["\x6a\x61\x64\167\141\154\163"] = $this->cbt->getAllDataJadwal($guru->id_guru, $id_mapel); goto kDwk9; l9wpr: $data["\152\x61\x64\167\141\154\163"] = $this->cbt->getAllDataJadwal(null, $id_mapel); goto hDrRX; rg5lQ: GWdVP: goto mBtV8; Sy73l: $data["\152\x6d\x6c\111\x73\164"] = []; goto G2xUJ; Ix1I9: $data["\x6c\145\166\x65\x6c\x73"] = $this->dropdown->getAllLevel($setting->jenjang); goto Q7J0D; Zuwje: $user = $this->ion_auth->user()->row(); goto Auwvv; x1a5Z: $smt = $this->dashboard->getSemesterActive(); goto imnmb; WoGdp: RsLS3: goto vMo4t; HU1uP: yrs1U: goto jo2kC; UgkVi: Dnjvl: goto qf7dU; TWdNU: $this->load->view("\143\142\164\57\x6a\141\x64\167\141\x6c\x2f\144\x61\164\x61"); goto XUrrv; JBV4q: $data["\x6a\141\x64\x77\141\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto Sy73l; DmSYP: $level = $lvl == null ? "\60" : $lvl; goto Zuwje; hDrRX: $data["\151\x64\137\x67\165\162\165"] = ''; goto jdp9F; MU25m: if ($type == "\60") { goto uwI5I; } goto bdRqk; XPZIE: if ($type == "\x32") { goto yrs1U; } goto ighlh; BOvgz: $data["\x69\x64\137\155\141\160\145\154"] = null; goto A8pVN; gvbxj: $data["\x69\144\x5f\x6d\x61\160\145\x6c"] = null; goto K4dix; jo2kC: $id_mapel = $this->input->get("\151\x64"); goto HFKtd; cpKo3: goto pR5au; goto uQiRW; K4dix: $data["\151\144\x5f\154\x65\x76\145\154"] = null; goto PQNPJ; CSyy3: $data["\160\162\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto R5kuP; y9sam: goto oe6GY; goto J71nK; Huc2N: $data["\x6d\141\160\x65\x6c\163"] = $arrMapel; goto JuOQo; Fnzzz: $data["\151\x64\x5f\146\151\x6c\x74\x65\x72"] = $type == null ? '' : $type; goto TPOAA; iJzXJ: $data["\151\144\137\x67\x75\x72\165"] = null; goto LI2aH; NmlyL: $data["\x69\x64\x5f\x6c\x65\x76\x65\154"] = ''; goto LaSP0; J71nK: Po_7V: goto qV28D; nnDWZ: $data["\x69\144\137\x67\x75\162\x75"] = ''; goto iBxzL; cqYS5: $this->load->view("\x6d\x65\x6d\x62\x65\x72\163\57\x67\x75\x72\x75\x2f\x74\x65\155\x70\x6c\141\x74\145\x73\57\150\145\x61\x64\x65\162", $data); goto TWdNU; x2SWi: $data = ["\x75\x73\145\162" => $user, "\152\165\144\165\x6c" => "\x4a\x61\x64\167\141\154\x20\120\x65\156\x69\x6c\141\151\141\x6e", "\x73\x75\x62\152\x75\x64\x75\154" => "\x50\x48\57\x50\124\123\57\x50\101\x54\57\x55\x53\102\x4b", "\163\145\x74\164\151\x6e\147" => $setting]; goto uld9H; QEsZw: $arrMapel = []; goto B6X_u; AQ9Zi: $data["\x69\x64\x5f\147\165\x72\x75"] = $id_guru; goto UcZkO; bRIE7: $data["\141\144\x61\x5f\165\x6a\x69\141\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\155\55\x64")); goto Ix1I9; ighlh: if ($type == "\63") { goto OjULB; } goto IlbSM; WmHmT: $data["\x69\x64\x5f\x6d\141\160\x65\154"] = null; goto ncYmn; hOqoV: $data["\151\x64\137\147\165\x72\165"] = null; goto gvbxj; XUrrv: $this->load->view("\x6d\x65\x6d\142\145\162\x73\57\x67\x75\162\x75\x2f\x74\145\155\x70\154\141\x74\145\x73\x2f\x66\x6f\157\164\145\162"); goto qPpm6; ncYmn: $data["\x69\144\137\154\145\166\x65\x6c"] = null; goto VKy4k; Auwvv: $setting = $this->dashboard->getSetting(); goto x2SWi; qf7dU: } public function add($id_jadwal) { goto G4h3k; jMI5k: $data["\162\165\x61\156\147\163"] = $this->cbt->getAllRuang(); goto rTAWz; z3DtT: $tp = $this->dashboard->getTahunActive(); goto pDZef; UgyoO: goto CqEPt; goto TNzUX; nIiYC: $data["\147\x75\162\165"] = $gurus; goto EghjM; WndWG: $arrMapel = []; goto CWa10; PzIA3: $data["\x6d\x61\x70\x65\154"] = $arrMapel; goto XeuPG; XeuPG: $this->load->view("\x6d\x65\155\x62\145\162\x73\x2f\147\x75\x72\165\57\164\x65\x6d\x70\154\x61\x74\x65\163\57\x68\145\141\144\145\162", $data); goto ug7y2; iuMGO: $this->load->view("\143\x62\x74\57\x6a\141\x64\x77\141\154\57\x61\144\x64"); goto e4Ks9; Ju5YQ: $data["\x70\162\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto nIiYC; UoCk8: $data["\164\160\137\x61\143\x74\x69\x76\x65"] = $tp; goto XrwsW; XrwsW: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto giYVZ; ug7y2: $this->load->view("\x63\x62\164\x2f\152\x61\x64\x77\x61\x6c\x2f\x61\x64\144"); goto zHnYH; G4h3k: $enable = $this->input->get("\145\156\x61\142\154\145", true); goto Os_Qc; DVeP8: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto FDCOE; giYVZ: $data["\163\x6d\x74\137\141\143\x74\x69\x76\145"] = $smt; goto MORFP; KKKcK: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto woXf7; pl218: l01QY: goto cVIhB; MORFP: if ($id_jadwal == 0) { goto z7yLp; } goto gnK8c; pDZef: $smt = $this->dashboard->getSemesterActive(); goto pDJx8; EghjM: $data["\x6d\141\x70\145\154"] = $this->dropdown->getAllMapel(); goto op3mG; RqgNM: CqEPt: goto xtYpl; J4upR: $data["\152\141\144\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto RqgNM; AfIPd: $data["\152\x65\156\x69\x73"] = $this->cbt->getAllJenisUjian(); goto EQd3c; op3mG: $this->load->view("\x5f\164\145\155\160\154\141\164\145\x73\57\x64\141\x73\150\x62\157\141\x72\x64\x2f\137\150\x65\141\144\145\x72", $data); goto iuMGO; FDCOE: $data["\147\165\x72\x75"] = $guru; goto KKKcK; gnK8c: $data["\152\141\144\x77\x61\154"] = $this->cbt->getJadwalById($id_jadwal); goto UgyoO; zHnYH: $this->load->view("\x6d\145\155\x62\145\162\163\x2f\x67\x75\x72\x75\x2f\x74\145\155\x70\154\x61\164\145\x73\57\x66\157\157\x74\145\162"); goto JB9PH; DCrvd: ndRcM: goto Ju5YQ; CWa10: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; Au3Ga: } goto Wzsey; TNzUX: z7yLp: goto J4upR; Os_Qc: $user = $this->ion_auth->user()->row(); goto qgNkv; xtYpl: $gurus = $this->dropdown->getAllGuru(); goto jMI5k; woXf7: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto WndWG; ujFNg: if ($this->ion_auth->is_admin()) { goto ndRcM; } goto DVeP8; qgNkv: $data = ["\165\x73\145\162" => $user, "\x6a\x75\144\x75\154" => $id_jadwal == 0 ? "\124\x61\155\x62\141\150\x20\112\141\144\167\141\x6c\x20\x55\152\x69\x61\x6e" : "\105\x64\151\164\x20\x4a\141\x64\167\x61\x6c\x20\125\x6a\x69\x61\x6e", "\163\165\142\152\x75\x64\165\154" => "\112\x61\x64\x77\x61\154", "\x73\x65\164\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto z3DtT; EQd3c: $data["\x6b\x65\x6c\141\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto jx7Wr; JB9PH: goto l01QY; goto DCrvd; e4Ks9: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\164\x65\163\57\144\x61\x73\150\142\157\x61\x72\x64\x2f\137\x66\x6f\x6f\x74\x65\x72"); goto pl218; jx7Wr: $data["\144\151\x73\141\x62\154\x65\137\x6f\x70\x73\x69"] = $enable != null && $enable == 1; goto ujFNg; rTAWz: $data["\163\145\x73\x69\x73"] = $this->dropdown->getAllSesi(); goto AfIPd; Wzsey: th6q6: goto PzIA3; pDJx8: $data["\x74\x70"] = $this->dashboard->getTahun(); goto UoCk8; cVIhB: } public function getBankMapel($id_mapel) { goto xwjQx; siQFP: $smt = $this->dashboard->getSemesterActive(); goto TTcDL; xwjQx: $tp = $this->dashboard->getTahunActive(); goto siQFP; TTcDL: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto e4pZg; a1OUn: f9IMd: goto DFa0Y; e4pZg: $filtered = []; goto FkpL0; FkpL0: foreach ($banks as $key => $bank) { goto AK_cq; CGp8k: $ada4 = $num4 == (int) $bank->tampil_isian; goto sO32p; EijwQ: $num5 = isset($cek_soal["\x35"]) ? count($cek_soal["\65"]) : 0; goto AoYP2; kxKCm: $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\x32"]) : 0; goto prqqe; sO32p: $ada5 = $num5 == (int) $bank->tampil_esai; goto knMTM; AoYP2: $ada1 = $num1 == (int) $bank->tampil_pg; goto yQ_W4; knMTM: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto LvPCF; } goto nPDKo; nPDKo: $filtered[$key] = $bank->bank_kode; goto geRNx; Q6ja7: TbVwp: goto OXBzx; yEtmJ: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto CGp8k; geRNx: LvPCF: goto Q6ja7; nEqxw: $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\x31"]) : 0; goto kxKCm; yQ_W4: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto yEtmJ; jReTJ: $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\x34"]) : 0; goto EijwQ; AK_cq: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto nEqxw; prqqe: $num3 = isset($cek_soal["\x33"]) ? count($cek_soal["\63"]) : 0; goto jReTJ; OXBzx: } goto a1OUn; DFa0Y: $this->output_json($filtered); goto TxvIi; TxvIi: } public function saveJadwal() { goto mf13t; l30P5: $data["\155\145\163\x73\141\x67\x65"] = $res ? "\x4a\141\x64\167\x61\x6c\40\142\x65\x72\x68\x61\x73\x69\x6c\40\144\x69\x73\151\x6d\160\141\x6e" : "\112\141\x64\167\x61\x6c\40\x73\165\x64\141\150\x20\x61\144\141"; goto h82yf; HjCaM: $this->logging->saveLog(3, "\x6d\x65\x6e\x61\155\x62\141\150\x20\x6a\x61\144\167\x61\x6c\x20\x70\x65\154\141\152\141\x72\141\156"); goto qsiA6; Hc3Bm: $id = $this->input->post("\151\144\x5f\152\x61\144\x77\141\x6c", true); goto N2BLP; a3rt1: DJkCB: goto Jm23g; wScsK: AcsIG: goto HjCaM; MrLjm: goto DJkCB; goto P45cW; N2BLP: if (!$id) { goto AcsIG; } goto UcYd6; wll9H: $data["\x6d\x65\163\163\x61\147\145"] = "\113\x65\163\x61\154\141\150\141\x6e\x20\64\60\x34"; goto yf_2d; LaO2x: $smt = $this->dashboard->getSemesterActive(); goto ZOQmr; mf13t: $tp = $this->dashboard->getTahunActive(); goto LaO2x; Jm23g: $data["\163\165\x63\x63\145\x73\163"] = $status; goto Hc3Bm; qsiA6: Qj2iW: goto BzeM3; SZWxW: goto Qj2iW; goto wScsK; n6ob2: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto l30P5; ZOQmr: if ($this->input->post()) { goto I1vif; } goto wll9H; P45cW: I1vif: goto n6ob2; yf_2d: $status = FALSE; goto MrLjm; BzeM3: $this->output_json($data); goto dubZC; UcYd6: $this->logging->saveLog(4, "\x6d\145\x6e\147\x65\144\x69\164\40\x6a\x61\144\x77\x61\x6c\40\x70\145\154\x61\x6a\x61\x72\141\x6e"); goto SZWxW; h82yf: $status = $res; goto a3rt1; dubZC: } public function deleteJadwal() { goto vNPXu; xOx7X: QZ7u4: goto zX8xg; rPlv8: $data["\x73\164\x61\164\x75\x73"] = false; goto STFqa; vio22: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto KivBp; mT90b: goto vhpxW; goto xOx7X; qUqZj: XkLsg: goto tiSsk; STFqa: $data["\x6d\x65\163\x73\x61\x67\145"] = "\x4a\x61\144\x77\141\154\40\x55\x6a\x69\x61\156\40\x73\145\144\141\156\147\40\144\151\x67\x75\156\141\153\x61\x6e"; goto w9hnO; VXoDM: $this->output_json($data); goto Ma2Jf; gMJKH: $data["\155\x65\163\163\x61\x67\x65"] = "\x62\145\x72\150\141\163\151\154"; goto T7XCy; IgJGI: $hapusDurasiSiswa = $this->master->delete("\143\x62\x74\x5f\144\165\x72\x61\x73\151\x5f\163\x69\x73\x77\141", $id, "\151\144\x5f\152\141\x64\167\x61\154"); goto COFgI; w9hnO: goto qOD5m; goto qUqZj; vNPXu: $id = $this->input->get("\x69\x64\x5f\x6a\x61\x64\x77\x61\x6c", true); goto xk7Vc; d_bw6: $jadwal = $this->cbt->getJadwalById($id); goto o9Jbf; PjyUR: vhpxW: goto VXoDM; dwyu_: if ($this->master->delete("\x63\x62\x74\x5f\152\x61\x64\x77\x61\154", $id, "\x69\x64\137\x6a\141\x64\167\x61\x6c")) { goto XkLsg; } goto rPlv8; A7i84: $data["\x73\164\141\164\x75\x73"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto gMJKH; tiSsk: $hapusNilaiSiswa = $this->master->delete("\x63\x62\164\x5f\163\x6f\141\x6c\x5f\163\151\x73\x77\141", $id, "\x69\144\137\152\141\144\x77\141\x6c"); goto IgJGI; Fmzp4: $data["\x6d\145\163\x73\x61\x67\x65"] = "\x48\141\x73\x69\x6c\x20\125\152\x69\141\x6e\40\x62\145\154\x75\155\40\x64\x69\162\x65\153\141\160"; goto PjyUR; xk7Vc: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto vio22; KivBp: $data["\x73\x74\x61\x74\x75\x73"] = false; goto d_bw6; T7XCy: qOD5m: goto mT90b; o9Jbf: if ($terpakai && $jadwal->rekap == 0) { goto QZ7u4; } goto dwyu_; COFgI: $this->logging->saveLog(5, "\155\145\156\147\x68\141\160\x75\x73\x20\x6a\141\x64\x77\x61\x6c\x20\x75\x6a\x69\141\156"); goto A7i84; zX8xg: $data["\163\x74\x61\x74\x75\x73"] = false; goto Fmzp4; Ma2Jf: } public function deleteAllJadwal() { goto MxNx8; POMdm: VFH1r: goto t6Qti; MxNx8: $arrId = json_decode($this->input->post("\x63\150\x65\143\x6b\145\144", true)); goto HJLgY; yGQ5F: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto atwfD; iK2Yx: $hapusDurasiSiswa = $this->master->delete("\143\142\x74\137\x64\x75\162\141\x73\x69\137\x73\x69\x73\167\141", $arrId, "\x69\144\137\x6a\141\144\167\x61\154"); goto UH1hs; TGxuD: $data["\x73\x74\x61\164\165\163"] = false; goto y0HYQ; f7qql: $data["\155\x65\x73\x73\x61\147\145"] = "\110\x61\163\x69\154\40\125\x6a\x69\141\156\x20\x62\x65\x6c\x75\x6d\x20\144\x69\162\x65\x6b\x61\160"; goto hSe9N; hSe9N: EgU8t: goto oLJ0i; UUcaF: aOGrC: goto IHI7q; hFBx9: $this->output_json($data); goto hCMwS; R7yhJ: ZqO0d: goto XejTm; ncUTM: $data["\x73\x74\x61\164\165\163"] = false; goto f7qql; n51Mb: $data["\142\141\143\x6b\x75\x70"] = $counts; goto hFBx9; bxSG9: if ($this->master->delete("\x63\x62\164\x5f\152\141\x64\167\141\x6c", $arrId, "\151\144\x5f\152\x61\144\x77\141\154")) { goto aOGrC; } goto IqS84; jAwpp: $counts = array_count_values($backuped); goto GpTOb; uMtVs: goto VFH1r; goto UUcaF; HJLgY: ob_start(); goto yGQ5F; y0HYQ: $data["\x6d\145\163\163\141\147\x65"] = "\x4a\141\x64\x77\141\154\x20\x55\152\x69\x61\156\40\x73\x65\x64\x61\x6e\147\x20\144\x69\147\x75\x6e\141\153\x61\156"; goto uMtVs; itSCM: $backuped = []; goto Zum0t; XejTm: ob_end_clean(); goto ncUTM; t6Qti: goto EgU8t; goto R7yhJ; UH1hs: $this->logging->saveLog(5, "\x6d\x65\x6e\147\150\141\160\x75\x73\x20\152\141\x64\x77\x61\154\x20\x75\x6a\151\x61\156"); goto cWQBG; IHI7q: $hapusNilaiSiswa = $this->master->delete("\x63\142\x74\137\x73\157\x61\154\137\163\x69\x73\167\x61", $arrId, "\151\x64\x5f\152\141\x64\x77\141\x6c"); goto iK2Yx; cWQBG: ob_end_clean(); goto NHLw_; NHLw_: $data["\x73\x74\x61\x74\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto c2TSC; IqS84: ob_end_clean(); goto TGxuD; RowC1: l8Wob: goto tNsC7; Zum0t: $digunakan = []; goto XchqP; c2TSC: $data["\x6d\x65\x73\163\141\x67\145"] = "\142\145\162\x68\x61\163\151\154"; goto POMdm; oLJ0i: $data["\x64\151\147\165\156\141\153\x61\x6e"] = $count_terpakai; goto n51Mb; atwfD: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto itSCM; tNsC7: $count_terpakai = array_count_values($digunakan); goto jAwpp; XchqP: foreach ($jadwals as $jadwal) { goto hjFZJ; hjFZJ: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto xGwc5; pyg_H: array_push($digunakan, $terpakai); goto Autgt; Autgt: lnjMA: goto o46Xm; xGwc5: array_push($backuped, $jadwal->rekap); goto pyg_H; o46Xm: } goto RowC1; GpTOb: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto ZqO0d; } goto bxSG9; hCMwS: } }
