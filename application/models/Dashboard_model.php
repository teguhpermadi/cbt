<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\105\x50\101\x54\110") or exit("\116\157\40\144\x69\162\x65\x63\x74\40\x73\x63\162\151\x70\x74\40\x61\x63\143\x65\x73\x73\40\x61\x6c\x6c\x6f\167\145\144"); class Dashboard_model extends CI_Model { public function getSetting() { return $this->db->get("\163\145\x74\164\x69\x6e\x67")->row(); } public function getRunningText() { return $this->db->get("\x72\165\156\x6e\151\x6e\x67\x5f\x74\x65\x78\x74")->result(); } public function total($table, $where = null) { goto ZWXQk; Sd4n4: $this->db->where($where); goto PvvmP; iZ8oC: $query = $this->db->get($table)->num_rows(); goto hyDbs; PvvmP: SVWdN: goto iZ8oC; hyDbs: return $query; goto ioAda; ZWXQk: if (!($where != null)) { goto SVWdN; } goto Sd4n4; ioAda: } public function hapus($table, $data, $pk) { $this->db->where_in($pk, $data); return $this->db->delete($table); } public function getProfileAdmin($id_user) { goto cEDkb; rpDbL: $this->db->join("\165\163\x65\x72\x73\x5f\x70\162\157\x66\x69\154\x65\40\142", "\141\x2e\151\x64\x3d\142\x2e\151\x64\137\x75\163\145\x72", "\x6c\145\x66\x74"); goto OhsKu; cEDkb: $this->db->select("\x62\x2e\52"); goto U2U0t; uaGka: return $query; goto wucJ2; OhsKu: $this->db->where("\x61\56\x69\144", $id_user); goto YDRe1; U2U0t: $this->db->from("\165\x73\145\x72\163\40\141"); goto rpDbL; YDRe1: $query = $this->db->get()->row(); goto uaGka; wucJ2: } public function totalWaliKelas($id_tp, $id_smt) { goto IrSde; lmN3Z: $query = $this->db->get("\152\x61\x62\141\164\x61\156\137\147\x75\162\165")->num_rows(); goto nQevg; kJ53F: $this->db->where("\151\x64\x5f\164\160", $id_tp); goto crGEg; crGEg: $this->db->where("\x69\144\137\163\x6d\x74", $id_smt); goto lmN3Z; nQevg: return $query; goto Edig7; IrSde: $this->db->where("\x69\x64\x5f\x6a\141\x62\x61\164\141\156", "\x34"); goto kJ53F; Edig7: } public function totalSiswaKelas($id_kelas, $id_tp, $id_smt) { goto CV4eF; CV4eF: $this->db->select("\141\x2e\x69\144\x5f\163\151\163\167\x61"); goto xwUux; xwUux: $this->db->from("\153\x65\x6c\141\x73\137\163\x69\163\167\141\x20\141"); goto OiPmJ; GBnKo: $this->db->where("\141\x2e\x69\144\137\163\155\164", $id_smt); goto On7pb; ECLYC: $query = $this->db->get()->num_rows(); goto eRuX1; eRuX1: return $query; goto vHlFD; On7pb: $this->db->where("\141\x2e\151\x64\x5f\x6b\145\154\x61\163", $id_kelas); goto ECLYC; OiPmJ: $this->db->where("\141\x2e\x69\144\137\164\160", $id_tp); goto GBnKo; vHlFD: } public function totalPengawas() { goto i63YD; q6FDH: return $query; goto JCEFp; ULXwx: $this->db->where("\x69\144\x5f\x6a\141\x64\167\141\154\40\41\x3d", "\141\x3a\60\72\x7b\x7d"); goto nMl74; i63YD: $this->db->select("\52"); goto ULXwx; nMl74: $query = $this->db->get("\143\142\x74\x5f\160\145\156\x67\141\x77\141\163")->num_rows(); goto q6FDH; JCEFp: } public function totalJadwal() { goto r4jwR; ipSSc: $query = $this->db->get("\143\142\x74\137\x6a\141\144\x77\141\154")->num_rows(); goto Z_BqF; Z_BqF: return $query; goto g2stP; r4jwR: $this->db->select("\52"); goto ipSSc; g2stP: } public function getDataTahun() { goto ScVur; V2g2v: $this->datatables->from("\155\141\x73\x74\145\162\x5f\x74\x70"); goto D4etH; ScVur: $this->datatables->select("\x69\x64\137\164\160\x2c\40\x74\x61\x68\x75\156\x2c\x20\x61\143\164\x69\166\x65"); goto V2g2v; D4etH: return $this->datatables->generate(); goto KWRdV; KWRdV: } public function getTahun() { goto Xt_Se; e4phR: return $result; goto ATYjo; Xt_Se: $this->db->order_by("\x74\x61\x68\x75\x6e", "\101\x53\x43"); goto bGf6w; bGf6w: $result = $this->db->get("\x6d\141\x73\164\x65\x72\137\x74\x70")->result(); goto e4phR; ATYjo: } public function getTahunById($id) { $result = $this->db->get_where("\155\x61\x73\x74\145\162\137\164\x70", "\x69\144\137\x74\160\x3d" . $id)->row(); return $result; } public function getTahunByTahun($tahun) { $result = $this->db->get_where("\155\141\x73\164\145\x72\137\164\160", "\164\x61\x68\x75\x6e\x3d" . "\42" . $tahun . "\42")->row(); return $result; } public function getTahunActive() { goto h9JHU; NPFso: $result = $this->db->get()->row(); goto LbFGZ; ia7dI: $this->db->from("\155\x61\163\x74\x65\x72\x5f\x74\160"); goto mR_UB; mR_UB: $this->db->where("\141\143\164\x69\166\145", 1); goto NPFso; LbFGZ: return $result; goto ZpbZp; h9JHU: $this->db->select("\x69\144\x5f\164\x70\x2c\x20\164\x61\150\x75\x6e"); goto ia7dI; ZpbZp: } public function getSemester() { goto blHjQ; tmvWS: return $result; goto yrXF3; i5xtl: $result = $this->db->get("\x6d\x61\163\x74\145\x72\x5f\x73\155\164")->result(); goto tmvWS; blHjQ: $this->db->order_by("\163\x6d\164", "\x41\x53\x43"); goto i5xtl; yrXF3: } public function getSemesterById($id) { $result = $this->db->get_where("\155\141\163\164\145\x72\x5f\x73\155\x74", "\x69\x64\137\163\155\x74\75" . $id)->row(); return $result; } public function getSemesterByNama($nama_smt) { $result = $this->db->get_where("\155\141\163\164\x65\x72\x5f\163\155\164", "\x6e\141\x6d\x61\x5f\163\155\164\75" . "\x22" . $nama_smt . "\42")->row(); return $result; } public function getSemesterActive() { goto Lu3KA; lek9a: return $result; goto s2m6g; riU3j: $result = $this->db->get()->row(); goto lek9a; Lu3KA: $this->db->select("\x69\x64\x5f\163\x6d\x74\x2c\x20\156\x61\155\141\137\x73\x6d\x74\x2c\x20\x73\x6d\164"); goto LfFvB; LfFvB: $this->db->from("\155\141\x73\x74\145\162\x5f\163\155\164"); goto lcLE_; lcLE_: $this->db->where("\141\143\x74\151\166\145", 1); goto riU3j; s2m6g: } public function getDataGuruByUserId($id_user, $id_tp, $id_smt) { goto p1Guj; UE9CE: return $query; goto xkpf3; X2W4s: $query = $this->db->get()->row(); goto UE9CE; Q1lMs: $this->db->where("\141\56\x69\x64\x5f\x75\x73\x65\x72", $id_user); goto X2W4s; Ng3h5: $this->db->join("\x6d\x61\163\x74\x65\162\x5f\x6b\145\x6c\141\163\x20\x66", "\141\x2e\x69\144\x5f\147\x75\162\165\75\x66\56\147\x75\x72\x75\137\151\x64\40\101\x4e\104\x20\x66\x2e\x69\144\x5f\164\160\75" . $id_tp . "\40\101\116\x44\x20\x66\x2e\151\x64\137\x73\155\x74\x3d" . $id_smt, "\154\x65\146\x74"); goto Nuoz5; Nuoz5: $this->db->join("\x6c\x65\x76\145\154\x5f\153\x65\154\141\x73\40\x67", "\146\x2e\154\145\x76\x65\154\137\151\144\x3d\x67\56\151\x64\137\x6c\x65\x76\145\154", "\154\x65\146\x74"); goto Q1lMs; p1Guj: $this->db->query("\123\x45\x54\40\x53\x51\x4c\137\x42\111\107\137\x53\x45\114\105\103\124\x53\75\61"); goto LW6Co; LW6Co: $this->db->select("\x61\56\151\144\x5f\x67\165\x72\165\54\x20\141\x2e\x6e\x61\155\x61\137\147\x75\162\165\x2c\40\141\x2e\156\151\160\x2c\x20\x61\x2e\151\144\x5f\x75\x73\145\162\54\40\x61\56\x66\157\164\x6f\x2c\x20\x62\x2e\151\x64\x5f\152\x61\x62\141\x74\141\x6e\x2c\x20\142\x2e\151\x64\x5f\153\x65\154\x61\x73\40\x61\163\x20\167\141\154\151\137\x6b\x65\154\x61\163\x2c\40\x66\x2e\154\x65\x76\145\154\x5f\x69\x64\x2c\x20\x67\56\154\x65\x76\145\x6c"); goto CncSp; IfKEQ: $this->db->join("\154\x65\x76\145\x6c\x5f\147\165\x72\x75\40\x65", "\142\x2e\x69\144\137\152\141\142\141\x74\141\156\75\145\56\151\144\x5f\x6c\145\166\x65\x6c", "\x6c\x65\x66\164"); goto Ng3h5; CncSp: $this->db->from("\155\x61\x73\x74\145\162\137\x67\165\x72\x75\40\x61"); goto rgtSx; rgtSx: $this->db->join("\x6a\141\142\141\164\141\156\x5f\147\x75\x72\x75\40\142", "\x61\x2e\x69\144\137\147\165\x72\165\75\142\56\151\x64\x5f\x67\165\162\x75\40\101\116\x44\x20\142\x2e\x69\x64\x5f\x74\x70\75" . $id_tp . "\40\101\x4e\104\x20\142\56\x69\144\x5f\163\x6d\164\x3d" . $id_smt, "\154\145\x66\164"); goto IfKEQ; xkpf3: } public function getDataGuruById($id_guru, $id_tp, $id_smt) { goto Jzd8E; UG3GX: $this->db->where("\x61\56\x69\x64\137\147\x75\162\x75", $id_guru); goto BR09D; LGqAI: return $query; goto pzhRQ; BR09D: $query = $this->db->get()->row(); goto LGqAI; uEq5s: $this->db->join("\154\145\166\x65\x6c\137\x6b\145\154\141\x73\x20\x67", "\x66\56\x6c\145\166\145\154\137\x69\x64\x3d\x67\56\151\144\137\154\x65\x76\145\x6c", "\154\145\x66\x74"); goto UG3GX; Jzd8E: $this->db->query("\x53\x45\x54\x20\123\121\114\x5f\x42\111\x47\137\x53\105\x4c\x45\x43\124\x53\75\x31"); goto vf3NY; BKkbW: $this->db->from("\155\x61\163\x74\145\162\x5f\x67\165\162\165\40\x61"); goto o2wkT; o2wkT: $this->db->join("\152\x61\142\x61\x74\x61\156\x5f\147\165\162\x75\40\x62", "\x61\x2e\x69\144\137\147\165\x72\x75\x3d\142\x2e\x69\144\137\147\165\x72\165\x20\101\x4e\x44\40\x62\56\151\x64\137\x74\x70\75" . $id_tp . "\x20\101\116\104\40\142\56\x69\x64\x5f\163\x6d\164\75" . $id_smt, "\154\145\x66\x74"); goto hGJpH; hGJpH: $this->db->join("\154\x65\166\x65\154\x5f\x67\x75\x72\x75\x20\145", "\142\56\151\144\x5f\152\x61\x62\x61\x74\x61\x6e\x3d\x65\56\151\x64\137\154\145\166\x65\x6c", "\x6c\x65\146\164"); goto EE8dk; EE8dk: $this->db->join("\155\141\163\x74\145\x72\137\153\x65\x6c\x61\163\x20\146", "\141\x2e\x69\x64\137\x67\x75\162\165\x3d\x66\56\147\x75\x72\165\x5f\x69\x64\40\101\x4e\104\x20\146\x2e\151\144\x5f\x74\x70\x3d" . $id_tp . "\x20\x41\116\104\40\x66\x2e\x69\x64\137\x73\155\164\x3d" . $id_smt, "\154\x65\x66\164"); goto uEq5s; vf3NY: $this->db->select("\x61\56\x69\144\137\x67\x75\x72\x75\54\x20\141\56\x6e\x61\x6d\x61\137\x67\x75\x72\x75\54\40\x61\x2e\x6e\x69\160\54\40\x61\56\151\144\x5f\165\163\x65\162\54\40\x61\56\x66\157\164\157\54\40\142\x2e\151\x64\x5f\152\x61\x62\x61\x74\x61\x6e\54\40\x62\x2e\151\144\137\x6b\x65\154\x61\163\x20\141\163\x20\x77\x61\154\151\x5f\x6b\x65\x6c\x61\163\54\40\x66\x2e\x6c\145\166\x65\x6c\x5f\151\x64\x2c\40\x67\56\x6c\x65\166\x65\154"); goto BKkbW; pzhRQ: } public function getListGuruByUserId($id_tp, $id_smt) { goto NTNE3; qG6pv: $this->db->join("\154\x65\x76\145\x6c\x5f\147\x75\x72\165\40\145", "\142\56\151\x64\137\152\x61\x62\141\x74\141\x6e\75\145\x2e\x69\x64\x5f\x6c\145\166\145\154", "\x6c\145\x66\x74"); goto T4Qic; kWxn5: $query = $this->db->get()->result(); goto VHYeB; cwei0: $this->db->join("\154\145\x76\x65\x6c\137\153\x65\154\x61\163\x20\147", "\146\x2e\x6c\145\166\x65\154\x5f\x69\144\x3d\x67\56\x69\144\137\154\x65\166\x65\154", "\x6c\x65\146\164"); goto kWxn5; yu3lt: return $rest; goto nGfPq; T4Qic: $this->db->join("\x6d\141\x73\164\145\x72\x5f\x6b\145\154\141\163\40\x66", "\141\56\x69\144\137\x67\x75\162\165\75\x66\56\147\165\162\165\x5f\151\x64\40\x41\116\x44\x20\x66\x2e\x69\x64\x5f\164\160\75" . $id_tp . "\x20\101\116\x44\x20\x66\x2e\151\x64\137\x73\x6d\x74\75" . $id_smt, "\154\145\x66\x74"); goto cwei0; MYidO: $this->db->from("\x6d\x61\x73\164\145\x72\137\x67\x75\162\x75\40\x61"); goto iYDa9; iYDa9: $this->db->join("\152\x61\x62\x61\164\141\x6e\137\x67\x75\x72\x75\40\142", "\141\56\151\144\137\x67\x75\x72\x75\x3d\142\56\x69\144\x5f\147\165\x72\165\40\x41\116\104\x20\x62\56\x69\x64\137\x74\x70\x3d" . $id_tp . "\x20\101\x4e\104\40\142\x2e\x69\144\x5f\x73\x6d\164\75" . $id_smt, "\154\x65\x66\x74"); goto qG6pv; VHYeB: $rest = []; goto jotBH; jotBH: foreach ($query as $guru) { $rest[$guru->id_guru] = $guru; pVzXM: } goto YD4o_; YD4o_: EkfMB: goto yu3lt; U14_U: $this->db->select("\141\56\x69\144\x5f\x67\x75\162\165\x2c\x20\141\x2e\x6e\x61\x6d\x61\137\147\165\162\x75\54\x20\141\x2e\x69\x64\x5f\165\x73\x65\x72\54\x20\141\56\x66\157\164\157\x2c\40\x62\x2e\151\x64\137\152\x61\142\x61\x74\141\x6e\x2c\40\142\x2e\151\144\x5f\153\145\154\x61\163\x20\141\x73\40\167\x61\x6c\151\x5f\x6b\x65\154\x61\x73\x2c\x20\x66\x2e\154\145\166\145\x6c\137\151\x64\54\x20\147\56\154\x65\x76\x65\154"); goto MYidO; NTNE3: $this->db->query("\123\x45\x54\x20\x53\x51\x4c\137\102\111\107\x5f\123\105\114\x45\x43\x54\x53\75\61"); goto U14_U; nGfPq: } public function getDetailGuruByUserId($id_user, $id_tp, $id_smt) { goto VbEA8; xzh5B: $this->db->join("\154\x65\166\145\x6c\137\147\165\162\165\40\145", "\x62\56\151\144\x5f\152\x61\142\x61\164\141\x6e\75\145\x2e\151\144\x5f\x6c\x65\166\145\x6c", "\154\145\146\164"); goto JSSee; P1zVT: $query = $this->db->get()->row(); goto YsxWM; JSSee: $this->db->join("\155\x61\163\164\145\x72\x5f\x6b\x65\x6c\x61\163\x20\x66", "\141\x2e\151\x64\137\x67\165\x72\165\75\146\x2e\147\x75\x72\x75\x5f\x69\x64\x20\x41\116\104\x20\x66\56\x69\144\137\164\x70\x3d" . $id_tp . "\40\x41\116\104\x20\x66\56\151\x64\137\163\x6d\x74\75" . $id_smt, "\154\x65\x66\x74"); goto Iv5SQ; DW_8z: $this->db->select("\52"); goto aRupX; HLPBF: $this->db->join("\x6a\141\142\x61\x74\141\156\x5f\147\165\x72\x75\x20\x62", "\x61\x2e\x69\x64\137\147\165\x72\x75\x3d\x62\56\x69\x64\x5f\x67\x75\x72\165\x20\101\116\x44\40\142\x2e\151\x64\x5f\x74\160\x3d" . $id_tp . "\x20\x41\x4e\x44\40\x62\x2e\151\144\x5f\163\155\164\x3d" . $id_smt, "\154\x65\x66\164"); goto xzh5B; YsxWM: return $query; goto PA8M0; Iv5SQ: $this->db->where("\141\x2e\x69\144\x5f\x75\x73\x65\x72", $id_user); goto P1zVT; aRupX: $this->db->from("\155\x61\163\x74\145\x72\137\x67\x75\x72\165\40\141"); goto HLPBF; VbEA8: $this->db->query("\x53\105\124\40\x53\121\x4c\x5f\x42\x49\x47\137\123\x45\114\x45\x43\x54\x53\x3d\61"); goto DW_8z; PA8M0: } public function getKelasByMapel($id_mapel = null) { goto CGPJ_; V7pbl: $query = $this->db->get()->row(); goto rKpNw; ggJsm: $this->db->join("\154\145\x76\145\x6c\x5f\x67\x75\x72\x75\40\144", "\141\56\x6c\145\x76\x65\154\x5f\151\x64\x3d\144\x2e\x69\144\137\x6c\145\166\x65\x6c", "\154\145\146\164"); goto V7pbl; gZnV6: $this->db->from("\x6d\141\x73\164\145\x72\137\x6b\145\x6c\141\163"); goto YXTVd; rKpNw: return $query; goto VuYMJ; YXTVd: $this->db->join("\x6d\141\x73\x74\x65\x72\137\x6d\141\160\145\154\40\142", "\x61\56\155\x61\x70\145\154\x5f\x69\144\x3d\142\x2e\x69\x64\x5f\x6d\x61\x70\145\154", "\x6c\145\146\164"); goto ggJsm; CGPJ_: $this->db->query("\123\105\x54\40\x53\x51\x4c\x5f\x42\x49\107\137\123\105\x4c\105\103\x54\x53\x3d\61"); goto Nc8x0; Nc8x0: $this->db->select("\x2a"); goto gZnV6; VuYMJ: } public function get_where($table, $pk, $id, $join = null, $order = null) { goto z2oOr; dAkxA: if (!($join !== null)) { goto Mqp1J; } goto cjnv4; l0njv: $this->db->where($pk, $id); goto dAkxA; z2oOr: $this->db->select("\52"); goto CbIrq; cjnv4: foreach ($join as $table => $field) { $this->db->join($table, $field); IyRxn: } goto DrnHb; jey41: $query = $this->db->get(); goto hrtLD; M1TgW: NaCbm: goto oYjIr; KFMva: Mqp1J: goto hH0o2; dIN9c: foreach ($order as $field => $sort) { $this->db->order_by($field, $sort); HHslt: } goto M1TgW; oYjIr: SrLJS: goto jey41; CbIrq: $this->db->from($table); goto l0njv; hH0o2: if (!($order !== null)) { goto SrLJS; } goto dIN9c; hrtLD: return $query; goto b9eef; DrnHb: cOfjv: goto KFMva; b9eef: } public function create($table, $data) { $insert = $this->db->insert($table, $data); return $insert; } public function update($table, $data, $pk, $id = null, $batch = false) { goto esM9k; mXeUa: Wa1Gg: goto TXqd1; dVEk3: IG2hf: goto W38Kv; zPeAK: goto IG2hf; goto mXeUa; esM9k: if ($batch === false) { goto Wa1Gg; } goto tqoKn; W38Kv: return $insert; goto RkbiL; TXqd1: $insert = $this->db->update($table, $data, array($pk => $id)); goto dVEk3; tqoKn: $insert = $this->db->update_batch($table, $data, $pk); goto zPeAK; RkbiL: } public function getDataSiswa($username, $id_tp, $id_smt) { goto mTEA2; TgRJE: $this->db->from("\155\x61\x73\x74\145\x72\x5f\x73\151\163\x77\x61\x20\x61"); goto BDgQJ; aEQER: $this->db->where("\165\163\145\162\156\141\x6d\145", $username); goto DoC1x; BDgQJ: $this->db->join("\x6b\145\154\x61\x73\x5f\163\x69\163\x77\141\40\142", "\141\x2e\151\x64\137\x73\x69\x73\x77\x61\x3d\x62\x2e\151\144\x5f\x73\x69\163\x77\141\x20\x41\x4e\104\40\x62\56\x69\x64\x5f\x74\160\x3d" . $id_tp . "\x20\x41\x4e\104\x20\x62\x2e\151\x64\x5f\163\x6d\x74\75" . $id_smt, "\154\145\146\x74"); goto VYFai; DoC1x: $query = $this->db->get()->row(); goto pJmfl; rBNRO: $this->db->join("\143\x62\164\x5f\163\145\163\x69\137\x73\x69\x73\x77\x61\x20\x64", "\x61\x2e\151\x64\137\163\x69\163\x77\x61\x3d\x64\x2e\x73\151\163\x77\141\137\x69\144", "\x6c\145\146\164"); goto aEQER; mTEA2: $this->db->query("\123\x45\124\40\x53\121\x4c\x5f\x42\111\x47\137\x53\x45\114\x45\103\x54\x53\75\x31"); goto rp51C; pJmfl: return $query; goto wdp1I; rp51C: $this->db->select("\52"); goto TgRJE; VYFai: $this->db->join("\155\x61\163\x74\x65\x72\137\x6b\x65\x6c\x61\163\40\x63", "\x62\56\x69\144\137\x6b\x65\154\x61\x73\75\x63\x2e\x69\144\x5f\x6b\x65\x6c\x61\163\x20\101\116\x44\x20\143\x2e\x69\144\137\164\160\75" . $id_tp . "\40\x41\x4e\104\40\x63\x2e\151\144\137\163\155\x74\75" . $id_smt, "\154\x65\146\164"); goto rBNRO; wdp1I: } public function loadPengumuman($id_for) { goto AfJrF; Jei5n: $this->db->from("\x70\x65\x6e\147\x75\x6d\x75\x6d\x61\x6e\x20\141"); goto OHDxj; AfJrF: $this->db->select("\141\56\x2a\54\x20\142\56\x6e\x61\155\141\137\x67\x75\x72\x75\x2c\x20\142\56\x66\157\164\x6f"); goto Jei5n; f4EaQ: $query = $this->db->get()->result(); goto ywYR6; OHDxj: $this->db->join("\x6d\141\163\x74\145\162\x5f\147\x75\162\x75\40\x62", "\x61\56\x64\x61\x72\151\75\142\56\x69\x64\x5f\x67\x75\x72\165", "\x6c\145\146\164"); goto dTg3R; ywYR6: return $query; goto d3MN5; dTg3R: $this->db->where("\x6b\145\x70\141\144\x61", $id_for); goto f4EaQ; d3MN5: } public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null) { goto oeIpQ; ldJfU: H35j5: goto vmrr8; xAK2Z: return $query; goto M6FG5; bf90Z: $this->db->where("\x61\56\151\x64\137\164\160", $id_tp); goto EMDpp; AqdR5: if (!($id_hari != null)) { goto H35j5; } goto EAks6; OHUHx: $this->db->from("\x6b\145\x6c\141\x73\137\152\x61\x64\x77\141\154\x5f\155\141\160\145\154\x20\141"); goto P4luo; P4luo: $this->db->join("\155\x61\x73\x74\x65\162\x5f\155\x61\x70\145\154\40\x62", "\142\x2e\151\144\x5f\x6d\x61\x70\145\154\75\141\x2e\151\144\x5f\155\x61\x70\145\154", "\154\x65\x66\164"); goto bf90Z; oeIpQ: $this->db->select("\52"); goto OHUHx; vmrr8: $query = $this->db->get()->result(); goto xAK2Z; EMDpp: $this->db->where("\141\x2e\x69\x64\137\x73\155\164", $id_smt); goto U6otN; U6otN: if (!($id_kelas != null)) { goto Q4JcY; } goto A3mXK; kibL0: Q4JcY: goto AqdR5; EAks6: $this->db->where("\x61\56\x69\x64\137\x68\141\162\x69", $id_hari); goto ldJfU; A3mXK: $this->db->where("\141\x2e\x69\144\137\153\145\x6c\141\163", $id_kelas); goto kibL0; M6FG5: } public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null) { goto YOTY9; OKxAE: return $query; goto agOwz; NeKj6: $this->db->where("\x69\144\x5f\153\x65\x6c\x61\163", $id_kelas); goto HY7Uu; YOTY9: $this->db->select("\x2a"); goto JwtXX; zFEtP: $query = $this->db->get()->result(); goto y5OgR; CRy9c: YraEN: goto NeKj6; HY7Uu: $query = $this->db->get()->row(); goto AeH2g; AeH2g: G4c3d: goto OKxAE; LwdGI: if ($id_kelas != null) { goto YraEN; } goto zFEtP; y5OgR: goto G4c3d; goto CRy9c; eO2YU: $this->db->where("\x69\144\137\x73\x6d\x74", $id_smt); goto LwdGI; GVev4: $this->db->where("\x69\144\x5f\164\x70", $id_tp); goto eO2YU; JwtXX: $this->db->from("\x6b\145\154\141\x73\x5f\152\x61\x64\167\x61\x6c\x5f\153\142\x6d"); goto GVev4; agOwz: } }
