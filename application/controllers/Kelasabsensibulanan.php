<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensibulanan extends CI_Controller { public function __construct() { goto V3Ckm; I7bd1: if (!$this->ion_auth->logged_in()) { goto i0dsf; } goto LDvsm; Q_Ms2: show_error("\x48\141\156\x79\141\x20\x41\x64\x6d\x69\156\151\x73\x74\x72\x61\x74\x6f\x72\40\171\x61\x6e\x67\40\144\x69\x62\145\x72\x69\40\x68\141\x6b\x20\x75\x6e\x74\x75\x6b\40\155\145\156\147\x61\x6b\163\145\x73\40\x68\x61\x6c\x61\155\x61\x6e\x20\151\156\151\54\40\74\x61\x20\150\x72\145\x66\x3d\x22" . base_url("\144\141\163\150\142\x6f\141\162\x64") . "\x22\x3e\x4b\145\x6d\142\141\154\x69\x20\x6b\x65\40\155\145\156\165\40\141\x77\141\154\x3c\57\x61\76", 403, "\x41\x6b\x73\145\x73\40\104\x69\142\141\164\x61\x73\x69"); goto z800B; fZ7hW: $this->load->model("\104\141\163\150\142\x6f\x61\162\144\137\x6d\157\x64\x65\154", "\x64\141\163\150\142\x6f\x61\162\144"); goto x2sYU; V3Ckm: parent::__construct(); goto I7bd1; LDvsm: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\165"))) { goto qds96; } goto Q_Ms2; IemR6: redirect("\141\165\x74\x68"); goto Rwzpq; x2sYU: $this->load->model("\x44\x72\157\160\x64\x6f\167\x6e\137\155\157\x64\145\x6c", "\x64\162\x6f\160\x64\157\x77\156"); goto X4M92; IEb6z: $this->form_validation->set_error_delimiters('', ''); goto MeFsd; xZoGd: goto v4O2W; goto w8D17; X4M92: $this->load->model("\113\x65\154\141\163\x5f\155\x6f\x64\145\x6c", "\153\x65\154\x61\x73"); goto IEb6z; w8D17: i0dsf: goto IemR6; SQRde: $this->load->model("\x4d\141\x73\164\x65\162\x5f\x6d\x6f\144\x65\x6c", "\x6d\x61\163\164\145\x72"); goto fZ7hW; ftgI5: $this->load->library(["\x64\141\x74\141\164\x61\x62\154\145\163", "\x66\157\x72\x6d\137\166\141\x6c\x69\x64\x61\164\x69\157\x6e"]); goto SQRde; z800B: qds96: goto xZoGd; Rwzpq: v4O2W: goto ftgI5; MeFsd: } public function output_json($data, $encode = true) { goto sMyZR; jfNk0: yiCgH: goto gYMrp; gYMrp: $this->output->set_content_type("\x61\160\160\154\151\x63\x61\164\151\x6f\x6e\57\x6a\x73\x6f\x6e")->set_output($data); goto s5Wwg; EecSS: $data = json_encode($data); goto jfNk0; sMyZR: if (!$encode) { goto yiCgH; } goto EecSS; s5Wwg: } public function index() { goto PWYk9; qyk67: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto Zxpj2; rbGf5: $this->load->view("\155\145\155\x62\x65\x72\x73\x2f\x67\165\162\x75\x2f\164\145\155\160\154\x61\164\145\x73\57\150\145\141\144\x65\x72", $data); goto vDm_E; cPM7H: $data["\155\141\160\145\154"] = $this->dropdown->getAllMapel(); goto IDtLP; wjRH6: $data["\151\x64\x5f\147\x75\x72\x75"] = $guru->id_guru; goto qyk67; uvgBj: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto WjBGX; gIEba: $arrMapel = []; goto QKUqg; liDiD: $tp = $this->master->getTahunActive(); goto BldJ1; V8r_c: $data["\142\x75\154\141\x6e"] = $this->dropdown->getBulan(); goto JgV6A; Gx3YC: $this->load->view("\x6d\x65\x6d\x62\x65\162\x73\x2f\147\x75\x72\x75\x2f\x74\145\x6d\x70\x6c\x61\x74\145\x73\57\x66\x6f\x6f\x74\145\x72"); goto eMYPn; yDo9h: $data["\x74\160\x5f\x61\x63\164\x69\166\x65"] = $tp; goto xceiS; WjBGX: $nguru[$guru->id_guru] = $guru->nama_guru; goto fGbqc; t2E5R: H0Sd2: goto o4mmV; xceiS: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto zd3JN; TJVWk: $data["\x70\x72\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto UUnnZ; ncmh0: $data["\x61\x72\x72\153\145\154\x61\x73"] = $arrKelas; goto MSUBZ; Zxpj2: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto gIEba; IDtLP: $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\164\145\x73\57\x64\141\x73\150\x62\157\141\162\x64\57\x5f\x68\x65\x61\x64\x65\x72", $data); goto mUj19; z4hQL: $this->load->view("\137\x74\145\155\x70\154\141\x74\145\x73\x2f\x64\x61\163\x68\x62\157\141\x72\144\x2f\x5f\146\x6f\157\x74\145\162"); goto t2E5R; g84_V: JRrun: goto ct7Xy; s576z: mJ0gF: goto RsPfN; R_c1U: uwdHn: goto TJVWk; wUDIE: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); Yo1KG: } goto K0ICX; ct7Xy: $data["\155\141\160\x65\154"] = $arrMapel; goto ncmh0; RsPfN: jeSzJ: goto s4ecW; QKUqg: $arrKelas = []; goto Biphw; s4ecW: $arrId = []; goto JED0b; mUj19: $this->load->view("\x6b\x65\x6c\141\x73\x2f\x61\x62\163\145\x6e\142\165\154\141\x6e\141\x6e\57\144\141\x74\x61"); goto z4hQL; fGbqc: $data["\147\165\162\165"] = $guru; goto wjRH6; JgV6A: if ($this->ion_auth->is_admin()) { goto uwdHn; } goto uvgBj; vDm_E: $this->load->view("\153\145\x6c\141\163\x2f\x61\x62\163\x65\x6e\x62\165\x6c\141\x6e\x61\156\57\144\141\x74\x61"); goto Gx3YC; zd3JN: $data["\x73\x6d\164\x5f\x61\x63\164\x69\166\145"] = $smt; goto V8r_c; MSUBZ: $data["\x6b\145\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto rbGf5; TmUOn: $data["\164\x70"] = $this->dashboard->getTahun(); goto yDo9h; PWYk9: $user = $this->ion_auth->user()->row(); goto TSPGH; TSPGH: $data = ["\x75\163\x65\162" => $user, "\x6a\x75\x64\165\x6c" => "\104\x61\x66\164\x61\x72\x20\x48\141\144\x69\162\x20\102\x75\x6c\x61\x6e\x61\156", "\163\x75\142\152\165\x64\165\x6c" => "\104\x61\x66\164\141\x72\x20\x48\x61\x64\x69\x72\40\x42\165\154\141\156\141\x6e\40\x53\x69\x73\167\141", "\163\x65\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto liDiD; eMYPn: goto H0Sd2; goto R_c1U; K0ICX: spRBA: goto g84_V; UUnnZ: $data["\153\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto VDRe3; JED0b: if (!($mapel != null)) { goto JRrun; } goto wUDIE; Biphw: if (!($mapel != null)) { goto jeSzJ; } goto IFBQf; VDRe3: $data["\147\165\162\x75"] = $this->dropdown->getAllGuru(); goto cPM7H; BldJ1: $smt = $this->master->getSemesterActive(); goto TmUOn; IFBQf: foreach ($mapel as $m) { goto aZ5qT; JucJ3: dd8uJ: goto h18YG; ePCQW: KS6RF: goto JucJ3; aZ5qT: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto K6Ly7; K6Ly7: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\x69\144\137\153\x65\x6c\141\x73" => $kls->kelas, "\x6e\141\155\x61\x5f\153\x65\x6c\141\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; R_OkS: } goto ePCQW; h18YG: } goto s576z; o4mmV: } public function loadAbsensiMapel() { goto iQi6R; K1rsg: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto HdnTu; WQpZW: $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); goto MbaEm; ne4cK: foreach ($infos as $info) { goto w3d4C; w3d4C: $dates = $this->total_hari($info->id_hari, $bulan, $tahun); goto GzIUx; GzIUx: foreach ($dates as $date) { goto N26ag; BpYkZ: $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date; goto aY_5r; N26ag: $d = explode("\x2d", $date); goto BpYkZ; aY_5r: y9O1d: goto OWgzL; OWgzL: } goto GYCp2; u5jAI: fAa19: goto WY18k; GYCp2: VXTHs: goto u5jAI; WY18k: } goto GvcPm; QyWW1: if (!($i < $tgl)) { goto D4SmB; } goto WVEn6; q6ZOu: ommEZ: goto XnAyf; MbaEm: $jadwal_materi = []; goto Iw711; h0AIT: $this->output_json(["\x6a\141\x64\167\141\x6c" => $jadwal]); goto eoh07; WVEn6: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto Jcb6r; iQi6R: $id_kelas = $this->input->post("\x6b\145\x6c\141\x73", true); goto CXlg1; eoh07: goto ommEZ; goto YflGv; fLMTU: $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan); goto i4T0K; HdnTu: foreach ($siswa as $s) { goto IM4IQ; bKbxr: goto Gqk4f; goto R1MA6; myjZG: $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\x2d" . $t] : null; goto ukAZM; SOJT8: $i++; goto bKbxr; R1MA6: brp4g: goto ic6hl; ic6hl: $log[$s->id_siswa] = ["\156\141\155\141" => $s->nama, "\x6e\151\x73" => $s->nis, "\x6b\145\154\141\x73" => $s->nama_kelas, "\x6d\x61\164\145\x72\151" => $arrMateri[1], "\x74\x75\147\x61\163" => $arrMateri[2]]; goto OtSv9; MdUY5: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto hQUQW; ukAZM: xDqBM: goto SOJT8; OtSv9: BQRwk: goto sfcuT; hQUQW: $b = $bulan < 10 ? "\60" . $bulan : $bulan; goto o13NX; rwNA6: $i = 0; goto yjovO; IM4IQ: $arrMateri = []; goto rwNA6; JDwID: if (!($i < $tgl)) { goto brp4g; } goto MdUY5; yjovO: Gqk4f: goto JDwID; o13NX: $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t] : null; goto myjZG; sfcuT: } goto Uz_m6; YflGv: gOIA7: goto N1Zny; dkx9q: $i++; goto Wpxox; Ht6dV: $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt); goto ne4cK; Jcb6r: $b = $bulan < 10 ? "\60" . $bulan : $bulan; goto rD78c; ZP6qC: $id_smt = $this->master->getSemesterActive()->id_smt; goto jlb9o; Wpxox: goto gTyIY; goto a6JYf; CXlg1: $id_mapel = $this->input->post("\x6d\141\x70\x65\x6c", true); goto WYrSH; i4T0K: $log = []; goto K1rsg; rD78c: $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $b . "\55" . $t, [$id_mapel]); goto opZCK; Dq9Zl: $this->output_json(["\154\157\147" => $log, "\x6a\141\x64\x77\141\x6c" => $jadwal, "\x6d\141\x74\x65\162\151" => $jadwal_materi, "\155\x61\160\145\x6c\163" => $mapel_bulan_ini]); goto q6ZOu; N1Zny: $jadwal->istirahat = unserialize($jadwal->istirahat); goto WQpZW; jlb9o: $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto OZLuy; OZLuy: if ($jadwal != null) { goto gOIA7; } goto h0AIT; a6JYf: D4SmB: goto fLMTU; V2gdS: $id_tp = $this->master->getTahunActive()->id_tp; goto ZP6qC; opZCK: yMyrX: goto dkx9q; aGj1T: $bulan = $this->input->post("\x62\x6c\x6e", true); goto V2gdS; Uz_m6: WW14w: goto HTkY2; GYSt3: gTyIY: goto QyWW1; WYrSH: $tahun = $this->input->post("\164\x68\156", true); goto aGj1T; GvcPm: T6rge: goto Dq9Zl; Iw711: $i = 0; goto GYSt3; HTkY2: $mapel_bulan_ini = []; goto Ht6dV; XnAyf: } function total_hari($id_day, $bulan, $taun) { goto LaIDe; umBAT: vFzmC: goto mwjmX; w2yEy: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto m0sT3; Dn_jU: $dates = []; goto w2yEy; Wra93: T_XVq: goto EPO9J; mwjmX: if (!($i < $total_days)) { goto BDp0b; } goto F4sF6; LaIDe: $days = 0; goto Dn_jU; EPO9J: VZIjP: goto DP2i2; m0sT3: $idday = $id_day == "\x37" ? 0 : $id_day; goto rfRYF; rfRYF: $i = 1; goto umBAT; F4sF6: if (!(date("\116", strtotime($taun . "\55" . $bulan . "\x2d" . $i)) == $idday)) { goto T_XVq; } goto gRUmS; UsQg8: goto vFzmC; goto o7gE8; PahfO: array_push($dates, date("\x59\x2d\155\x2d\x64", strtotime($taun . "\x2d" . $bulan . "\55" . $i))); goto Wra93; DP2i2: $i++; goto UsQg8; o7gE8: BDp0b: goto hwYi6; gRUmS: $days++; goto PahfO; hwYi6: return $dates; goto gVza1; gVza1: } }
