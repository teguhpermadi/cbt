<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\x45\120\x41\x54\110") or exit("\116\157\40\x64\151\162\145\143\164\x20\163\x63\x72\151\160\164\40\x61\x63\x63\145\x73\163\40\141\154\x6c\157\167\145\144"); class Dashboard_model extends CI_Model { public function getSetting() { return $this->db->get("\163\x65\164\164\x69\156\147")->row(); } public function getRunningText() { return $this->db->get("\162\x75\x6e\156\x69\156\147\x5f\164\x65\x78\164")->result(); } public function total($table, $where = null) { goto myro9; uIYO6: QSGx4: goto aCQ9w; aCQ9w: $query = $this->db->get($table)->num_rows(); goto pP55k; cSW_V: $this->db->where($where); goto uIYO6; pP55k: return $query; goto sra2m; myro9: if (!($where != null)) { goto QSGx4; } goto cSW_V; sra2m: } public function hapus($table, $data, $pk) { $this->db->where_in($pk, $data); return $this->db->delete($table); } public function getProfileAdmin($id_user) { goto D7wJ9; x1vXh: $query = $this->db->get()->row(); goto BslVE; tq1OW: $this->db->join("\165\163\145\162\x73\x5f\160\x72\x6f\x66\151\x6c\x65\x20\x62", "\x61\56\151\x64\75\x62\56\151\144\137\x75\163\x65\x72", "\154\x65\x66\164"); goto C6IuV; BslVE: return $query; goto pPmcT; D7wJ9: $this->db->select("\x62\56\x2a"); goto un8ZG; C6IuV: $this->db->where("\x61\56\151\x64", $id_user); goto x1vXh; un8ZG: $this->db->from("\x75\163\x65\x72\x73\40\x61"); goto tq1OW; pPmcT: } public function totalWaliKelas() { $query = $this->get_where("\152\141\142\x61\x74\141\156\137\147\x75\x72\x75", "\x69\144\137\x6a\x61\x62\141\164\141\156", "\64")->num_rows(); return $query; } public function totalSiswaKelas($id_kelas, $id_tp, $id_smt) { goto ctySo; ctySo: $this->db->select("\141\x2e\x69\x64\137\163\151\163\x77\141"); goto xAsOe; ldl93: $this->db->where("\x61\x2e\x69\144\137\163\x6d\164", $id_smt); goto WGmHb; Cpm3o: $query = $this->db->get()->num_rows(); goto cawSQ; xAsOe: $this->db->from("\x6b\145\x6c\x61\163\x5f\163\x69\163\x77\x61\40\141"); goto yLXEH; cawSQ: return $query; goto mvMfn; WGmHb: $this->db->where("\141\56\x69\144\x5f\153\x65\154\x61\x73", $id_kelas); goto Cpm3o; yLXEH: $this->db->where("\141\x2e\151\144\x5f\164\160", $id_tp); goto ldl93; mvMfn: } public function totalPengawas() { goto PB9nM; PB9nM: $this->db->select("\x2a"); goto CI2eD; FHmf6: $query = $this->db->get("\143\x62\164\137\160\145\156\x67\x61\x77\x61\163")->num_rows(); goto UiTNi; CI2eD: $this->db->where("\x69\144\x5f\x6a\x61\144\x77\x61\154\x20\x21\75", "\141\x3a\x30\72\x7b\175"); goto FHmf6; UiTNi: return $query; goto YtuMZ; YtuMZ: } public function totalJadwal() { goto QiUjq; MjJjE: $query = $this->db->get("\143\142\x74\137\x6a\x61\x64\x77\x61\x6c")->num_rows(); goto F36k1; QiUjq: $this->db->select("\x2a"); goto MjJjE; F36k1: return $query; goto JxoDb; JxoDb: } public function getDataTahun() { goto XVRn6; LOszr: return $this->datatables->generate(); goto Qa1C5; d_Ymr: $this->datatables->from("\x6d\141\163\164\x65\162\x5f\x74\160"); goto LOszr; XVRn6: $this->datatables->select("\151\144\x5f\x74\x70\x2c\40\x74\141\x68\165\156\54\x20\x61\x63\164\x69\x76\145"); goto d_Ymr; Qa1C5: } public function getTahun() { goto ka2NK; HQEv1: return $result; goto HxgCs; ka2NK: $this->db->order_by("\x74\141\150\165\156", "\x41\x53\x43"); goto lW2_o; lW2_o: $result = $this->db->get("\155\141\x73\x74\145\162\137\x74\160")->result(); goto HQEv1; HxgCs: } public function getTahunById($id) { $result = $this->db->get_where("\155\x61\x73\x74\145\x72\137\x74\160", "\151\x64\x5f\x74\160\75" . $id)->row(); return $result; } public function getTahunByTahun($tahun) { $result = $this->db->get_where("\155\x61\x73\164\145\162\137\x74\x70", "\x74\x61\x68\165\x6e\x3d" . "\x22" . $tahun . "\x22")->row(); return $result; } public function getTahunActive() { goto jQoKn; SnxhM: $this->db->from("\x6d\x61\163\164\145\162\x5f\164\160"); goto BZ6Xo; jQoKn: $this->db->select("\x69\144\137\164\160\54\40\x74\141\x68\x75\156"); goto SnxhM; Kml3x: return $result; goto w2cnx; BZ6Xo: $this->db->where("\141\143\x74\x69\166\145", 1); goto PHcol; PHcol: $result = $this->db->get()->row(); goto Kml3x; w2cnx: } public function getSemester() { goto vHKEZ; D6_yi: $result = $this->db->get("\x6d\141\163\x74\145\162\137\163\x6d\164")->result(); goto ERayN; ERayN: return $result; goto vba5g; vHKEZ: $this->db->order_by("\163\x6d\164", "\101\x53\x43"); goto D6_yi; vba5g: } public function getSemesterById($id) { $result = $this->db->get_where("\x6d\x61\163\x74\145\162\137\163\x6d\164", "\151\x64\x5f\163\x6d\164\x3d" . $id)->row(); return $result; } public function getSemesterByNama($nama_smt) { $result = $this->db->get_where("\155\141\163\x74\x65\162\137\163\x6d\x74", "\156\141\x6d\x61\137\x73\155\x74\x3d" . "\x22" . $nama_smt . "\x22")->row(); return $result; } public function getSemesterActive() { goto i4v03; Ql7Yz: $this->db->from("\155\141\163\x74\145\162\137\x73\x6d\164"); goto qQup4; i4v03: $this->db->select("\151\144\137\x73\x6d\x74\54\40\156\x61\155\x61\137\x73\155\164\x2c\x20\x73\x6d\164"); goto Ql7Yz; wKF5f: $result = $this->db->get()->row(); goto U6p1w; qQup4: $this->db->where("\x61\x63\x74\x69\166\145", 1); goto wKF5f; U6p1w: return $result; goto SBSGx; SBSGx: } public function getDataGuruByUserId($id_user, $id_tp, $id_smt) { goto wQZxb; vIUsZ: $this->db->from("\x6d\x61\x73\164\x65\x72\137\x67\x75\x72\165\40\x61"); goto soedw; vLB1v: $this->db->join("\155\x61\x73\164\145\162\x5f\153\145\x6c\141\x73\x20\x66", "\141\56\151\144\137\x67\165\x72\x75\75\x66\x2e\147\165\x72\x75\137\x69\144\x20\101\x4e\104\x20\146\56\x69\144\x5f\x74\160\75" . $id_tp . "\40\101\x4e\x44\40\146\x2e\151\144\137\x73\x6d\164\75" . $id_smt, "\x6c\145\x66\x74"); goto WtKbk; wQZxb: $this->db->query("\x53\105\124\x20\x53\121\x4c\x5f\102\111\107\x5f\x53\105\114\105\x43\124\123\75\61"); goto yiAgv; soedw: $this->db->join("\152\x61\142\141\164\141\156\x5f\x67\x75\162\x75\x20\142", "\141\56\x69\x64\x5f\x67\165\162\165\75\x62\56\x69\144\137\147\165\162\165\x20\x41\x4e\104\x20\x62\x2e\x69\x64\x5f\x74\x70\75" . $id_tp . "\x20\x41\116\x44\40\142\x2e\x69\x64\137\163\x6d\x74\x3d" . $id_smt, "\154\145\x66\x74"); goto J5238; J5238: $this->db->join("\x6c\x65\x76\145\154\x5f\147\x75\162\x75\x20\x65", "\x62\x2e\x69\x64\x5f\x6a\141\142\x61\x74\x61\156\75\x65\x2e\x69\x64\x5f\154\145\x76\x65\x6c", "\x6c\145\x66\164"); goto vLB1v; LukIr: $this->db->where("\x61\x2e\151\144\x5f\165\163\145\162", $id_user); goto r9o5t; viemm: return $query; goto ojnZ2; WtKbk: $this->db->join("\154\x65\166\x65\x6c\x5f\x6b\145\x6c\141\x73\x20\x67", "\x66\x2e\154\145\166\x65\154\x5f\x69\x64\x3d\147\x2e\x69\144\x5f\x6c\x65\x76\x65\x6c", "\x6c\145\146\164"); goto LukIr; r9o5t: $query = $this->db->get()->row(); goto viemm; yiAgv: $this->db->select("\x61\x2e\151\x64\137\x67\x75\162\x75\x2c\40\141\56\x6e\141\x6d\x61\x5f\x67\x75\162\x75\x2c\40\x61\x2e\156\151\160\x2c\40\x61\56\151\144\137\x75\163\145\x72\54\x20\x61\56\146\157\164\157\54\40\x62\x2e\x69\144\137\x6a\x61\x62\x61\x74\x61\x6e\54\40\x62\56\x69\144\137\x6b\x65\154\141\163\40\141\163\x20\x77\x61\154\151\x5f\x6b\x65\x6c\x61\x73\54\40\146\56\154\x65\166\x65\154\x5f\151\x64\x2c\40\147\56\154\x65\x76\x65\154"); goto vIUsZ; ojnZ2: } public function getDataGuruById($id_guru, $id_tp, $id_smt) { goto qjCKq; rWtCU: $this->db->join("\x6c\x65\166\x65\154\x5f\147\165\162\x75\40\145", "\142\56\x69\144\x5f\x6a\x61\x62\x61\164\141\156\x3d\145\56\x69\144\137\154\x65\166\x65\x6c", "\x6c\145\146\164"); goto ksGsl; UEmED: $this->db->join("\152\x61\142\x61\x74\141\156\x5f\147\x75\x72\x75\x20\x62", "\x61\x2e\151\x64\137\x67\165\x72\x75\x3d\142\56\x69\144\x5f\147\165\162\165\40\x41\x4e\x44\40\x62\56\x69\x64\x5f\164\160\75" . $id_tp . "\x20\101\x4e\x44\x20\x62\x2e\151\144\137\163\x6d\x74\75" . $id_smt, "\154\x65\x66\x74"); goto rWtCU; ksGsl: $this->db->join("\155\141\163\164\145\x72\x5f\x6b\x65\x6c\x61\163\x20\x66", "\141\56\x69\x64\x5f\147\165\162\165\x3d\146\x2e\x67\165\162\x75\x5f\151\144\40\101\x4e\x44\x20\146\x2e\x69\144\x5f\164\160\75" . $id_tp . "\x20\101\116\x44\40\x66\x2e\151\144\137\x73\155\x74\75" . $id_smt, "\154\145\x66\x74"); goto k2n9A; VNIS7: $this->db->where("\141\x2e\151\144\x5f\x67\x75\x72\165", $id_guru); goto XrtCt; k2n9A: $this->db->join("\154\145\166\x65\x6c\x5f\x6b\x65\x6c\141\163\x20\x67", "\146\56\x6c\x65\x76\x65\x6c\x5f\151\144\x3d\x67\56\151\144\137\x6c\145\x76\145\x6c", "\154\x65\146\164"); goto VNIS7; mh_W7: return $query; goto aqo2A; uZVaK: $this->db->from("\155\141\163\164\145\162\x5f\147\165\x72\x75\x20\x61"); goto UEmED; XrtCt: $query = $this->db->get()->row(); goto mh_W7; qjCKq: $this->db->query("\x53\105\x54\40\x53\121\114\x5f\x42\x49\107\137\x53\x45\114\105\x43\124\123\x3d\61"); goto tL3U1; tL3U1: $this->db->select("\141\56\x69\x64\x5f\x67\165\x72\x75\x2c\40\141\56\156\x61\155\x61\137\147\165\x72\x75\x2c\x20\141\56\156\151\x70\54\x20\x61\x2e\x69\144\x5f\x75\x73\145\162\54\x20\141\56\146\157\164\157\54\x20\142\56\x69\x64\x5f\152\141\x62\141\164\x61\x6e\x2c\x20\142\56\x69\x64\x5f\153\x65\154\141\163\x20\x61\x73\x20\167\141\x6c\151\137\153\x65\x6c\x61\163\54\x20\x66\56\154\145\166\145\154\x5f\x69\x64\x2c\x20\x67\56\154\145\166\145\x6c"); goto uZVaK; aqo2A: } public function getListGuruByUserId($id_tp, $id_smt) { goto z0_0_; AQ73o: foreach ($query as $guru) { $rest[$guru->id_guru] = $guru; KM4s0: } goto VpqeT; qKpg7: $this->db->join("\155\x61\x73\164\145\162\137\x6b\x65\x6c\141\x73\x20\146", "\x61\x2e\151\x64\137\147\x75\x72\165\75\146\56\147\165\x72\165\137\x69\x64\x20\101\x4e\x44\40\x66\x2e\x69\144\x5f\164\x70\x3d" . $id_tp . "\40\x41\x4e\104\40\146\x2e\151\x64\x5f\163\155\x74\75" . $id_smt, "\x6c\145\146\x74"); goto DjR6Y; LYLxs: return $rest; goto je3Je; DjR6Y: $this->db->join("\154\x65\x76\x65\x6c\x5f\153\x65\x6c\x61\163\40\147", "\146\56\x6c\145\x76\145\x6c\137\151\144\x3d\x67\x2e\x69\x64\137\x6c\145\166\145\154", "\x6c\x65\x66\x74"); goto KzZ7c; I9zcW: $this->db->from("\x6d\x61\163\x74\145\x72\137\147\x75\x72\x75\x20\x61"); goto VZJi9; IOfk9: $this->db->join("\154\x65\166\145\154\137\147\165\x72\x75\x20\145", "\x62\x2e\x69\x64\137\x6a\141\x62\141\164\x61\156\x3d\145\56\x69\x64\x5f\154\145\166\145\x6c", "\154\x65\x66\164"); goto qKpg7; wzYSb: $rest = []; goto AQ73o; VZJi9: $this->db->join("\x6a\x61\x62\141\164\x61\156\137\147\165\162\165\x20\x62", "\x61\56\x69\144\x5f\147\165\162\165\x3d\x62\56\151\x64\137\147\x75\162\x75\x20\101\x4e\104\40\142\56\x69\x64\137\x74\160\x3d" . $id_tp . "\x20\101\x4e\104\x20\x62\56\x69\144\x5f\163\155\x74\75" . $id_smt, "\154\145\146\164"); goto IOfk9; KzZ7c: $query = $this->db->get()->result(); goto wzYSb; JR10q: $this->db->select("\141\x2e\151\144\x5f\147\165\x72\x75\x2c\x20\141\x2e\x6e\141\x6d\141\137\x67\x75\162\165\x2c\x20\141\x2e\151\144\137\x75\163\x65\162\54\x20\x61\56\x66\157\x74\x6f\x2c\40\142\x2e\151\x64\137\x6a\141\142\141\164\141\156\54\40\142\x2e\x69\144\x5f\153\x65\x6c\141\x73\x20\141\163\x20\167\141\154\151\137\x6b\x65\x6c\141\x73\x2c\x20\146\56\154\145\x76\145\x6c\x5f\x69\144\x2c\x20\x67\56\x6c\x65\166\145\x6c"); goto I9zcW; VpqeT: WPv7s: goto LYLxs; z0_0_: $this->db->query("\123\x45\x54\x20\x53\121\x4c\137\102\x49\107\x5f\123\105\114\105\x43\124\123\x3d\x31"); goto JR10q; je3Je: } public function getDetailGuruByUserId($id_user, $id_tp, $id_smt) { goto TXZ90; StCyZ: $this->db->join("\x6c\x65\x76\x65\154\137\x67\165\162\x75\40\145", "\142\56\x69\x64\x5f\x6a\141\142\x61\164\141\x6e\75\145\x2e\151\x64\x5f\x6c\x65\166\145\x6c", "\x6c\x65\146\164"); goto xxUKg; xxUKg: $this->db->join("\x6d\x61\163\164\145\x72\x5f\x6b\145\x6c\141\x73\x20\x66", "\x61\56\x69\x64\x5f\x67\x75\x72\165\75\146\56\147\165\x72\165\137\x69\144\40\x41\x4e\x44\40\x66\56\151\144\x5f\164\x70\x3d" . $id_tp . "\x20\101\x4e\x44\40\x66\x2e\x69\x64\x5f\163\155\x74\x3d" . $id_smt, "\154\x65\x66\164"); goto ZGQGt; Gea8T: $this->db->select("\52"); goto PxSeN; PxSeN: $this->db->from("\x6d\141\x73\x74\x65\162\x5f\147\165\162\x75\40\x61"); goto tdKDI; cYh5U: $query = $this->db->get()->row(); goto yJMI6; ZGQGt: $this->db->where("\141\56\x69\x64\137\165\x73\x65\x72", $id_user); goto cYh5U; tdKDI: $this->db->join("\x6a\x61\x62\x61\x74\x61\156\x5f\147\x75\x72\165\40\142", "\141\56\x69\x64\x5f\147\x75\x72\x75\x3d\142\x2e\x69\144\x5f\147\165\x72\165\x20\101\x4e\x44\x20\x62\56\x69\x64\x5f\x74\x70\x3d" . $id_tp . "\x20\101\116\104\x20\x62\56\x69\x64\137\x73\155\164\x3d" . $id_smt, "\x6c\x65\x66\x74"); goto StCyZ; yJMI6: return $query; goto oVj5q; TXZ90: $this->db->query("\x53\105\124\x20\x53\x51\x4c\x5f\102\x49\x47\x5f\x53\105\114\x45\103\124\123\75\x31"); goto Gea8T; oVj5q: } public function getKelasByMapel($id_mapel = null) { goto Z2lRC; V7aFF: $this->db->select("\x2a"); goto TF2ua; gDMqF: $this->db->join("\x6c\x65\x76\x65\154\137\x67\x75\162\165\x20\144", "\x61\x2e\154\x65\x76\145\x6c\x5f\151\144\x3d\x64\56\x69\144\x5f\x6c\x65\x76\145\x6c", "\x6c\145\x66\164"); goto CypeX; Z2lRC: $this->db->query("\123\105\124\x20\x53\121\114\x5f\x42\x49\107\137\x53\x45\x4c\105\x43\x54\123\x3d\x31"); goto V7aFF; TF2ua: $this->db->from("\155\141\x73\x74\x65\162\137\153\145\x6c\x61\163"); goto WQyIT; FQifl: return $query; goto eUquG; WQyIT: $this->db->join("\155\141\x73\164\x65\162\x5f\155\141\x70\x65\x6c\x20\x62", "\141\56\x6d\x61\x70\x65\154\x5f\x69\144\x3d\x62\x2e\x69\x64\x5f\x6d\x61\x70\145\x6c", "\x6c\145\146\x74"); goto gDMqF; CypeX: $query = $this->db->get()->row(); goto FQifl; eUquG: } public function get_where($table, $pk, $id, $join = null, $order = null) { goto SIvXb; qLDeL: $query = $this->db->get(); goto QyvqD; iAxrw: y9HZo: goto qLDeL; ZmXmf: wroiQ: goto iAxrw; KCn8J: LpDCt: goto rt2Qm; APvq2: $this->db->from($table); goto CYYxT; Ix69K: foreach ($order as $field => $sort) { $this->db->order_by($field, $sort); I71HW: } goto ZmXmf; rt2Qm: if (!($order !== null)) { goto y9HZo; } goto Ix69K; y299v: FGT8I: goto KCn8J; SIvXb: $this->db->select("\x2a"); goto APvq2; BeSFh: if (!($join !== null)) { goto LpDCt; } goto iTmHP; iTmHP: foreach ($join as $table => $field) { $this->db->join($table, $field); AiDd8: } goto y299v; QyvqD: return $query; goto q9fBR; CYYxT: $this->db->where($pk, $id); goto BeSFh; q9fBR: } public function create($table, $data) { $insert = $this->db->insert($table, $data); return $insert; } public function update($table, $data, $pk, $id = null, $batch = false) { goto VEoqI; yintZ: qag10: goto SgtPZ; VEoqI: if ($batch === false) { goto qag10; } goto sgElp; yIr0V: goto Qyg8t; goto yintZ; SgtPZ: $insert = $this->db->update($table, $data, array($pk => $id)); goto ghtBV; V8Wal: return $insert; goto Jm7cd; sgElp: $insert = $this->db->update_batch($table, $data, $pk); goto yIr0V; ghtBV: Qyg8t: goto V8Wal; Jm7cd: } public function getDataSiswa($username, $id_tp, $id_smt) { goto TRyX3; M8wxe: $this->db->select("\x2a"); goto p2ZAc; Thsaw: $query = $this->db->get()->row(); goto NXFQ7; fXG8I: $this->db->join("\x6b\145\x6c\x61\163\137\x73\x69\x73\167\x61\x20\142", "\141\56\x69\x64\x5f\x73\x69\163\167\141\75\142\56\151\144\x5f\x73\x69\163\167\x61\40\101\116\104\x20\142\56\x69\x64\137\x74\x70\x3d" . $id_tp . "\x20\101\116\104\40\x62\x2e\x69\x64\x5f\x73\x6d\x74\x3d" . $id_smt, "\x6c\145\x66\x74"); goto tOp8q; p2ZAc: $this->db->from("\x6d\x61\x73\x74\145\x72\x5f\163\151\x73\167\141\x20\x61"); goto fXG8I; TRyX3: $this->db->query("\123\x45\124\40\123\x51\114\137\102\x49\x47\137\123\105\x4c\105\x43\x54\123\x3d\61"); goto M8wxe; NXFQ7: return $query; goto UfUdx; tOp8q: $this->db->join("\x6d\x61\163\164\x65\162\x5f\x6b\145\x6c\x61\x73\x20\x63", "\x62\56\151\x64\137\153\145\x6c\x61\x73\75\143\x2e\x69\144\x5f\x6b\145\x6c\141\163\x20\101\116\x44\x20\x63\x2e\151\x64\x5f\164\x70\75" . $id_tp . "\40\x41\116\104\40\x63\56\x69\x64\x5f\163\x6d\164\75" . $id_smt, "\154\x65\146\x74"); goto zKyyt; m97oc: $this->db->where("\x75\x73\x65\x72\156\x61\x6d\x65", $username); goto Thsaw; zKyyt: $this->db->join("\x63\x62\x74\x5f\163\145\163\151\x5f\x73\151\x73\167\x61\x20\x64", "\x61\56\x69\144\137\x73\151\x73\167\x61\x3d\x64\56\x73\151\x73\x77\141\x5f\151\x64", "\x6c\145\146\164"); goto m97oc; UfUdx: } public function loadPengumuman($id_for) { goto NKplb; sXvSq: $this->db->from("\160\x65\x6e\147\165\155\165\x6d\x61\156\x20\141"); goto yQTEt; NKplb: $this->db->select("\141\x2e\52\54\x20\x62\56\x6e\x61\155\141\137\147\x75\x72\x75\x2c\40\x62\x2e\146\x6f\164\157"); goto sXvSq; VzTOh: return $query; goto GFYEZ; MW4If: $query = $this->db->get()->result(); goto VzTOh; in7je: $this->db->where("\153\x65\160\x61\144\x61", $id_for); goto MW4If; yQTEt: $this->db->join("\155\141\163\x74\145\x72\137\147\165\162\165\40\142", "\x61\56\x64\x61\x72\x69\x3d\142\56\x69\x64\x5f\147\165\162\x75", "\154\145\x66\x74"); goto in7je; GFYEZ: } public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null) { goto EJbaG; IQvg7: OEOf6: goto z6SI9; UtWrN: $this->db->where("\141\56\x69\x64\137\163\155\164", $id_smt); goto CiI3S; z6SI9: $query = $this->db->get()->result(); goto zADAs; fgHfW: Qv3fs: goto bes2y; apE_O: $this->db->where("\x61\x2e\x69\x64\x5f\x68\x61\162\151", $id_hari); goto IQvg7; azhxJ: $this->db->from("\x6b\145\x6c\x61\163\137\x6a\141\144\167\x61\x6c\x5f\x6d\x61\160\145\x6c\x20\141"); goto oawGV; ZK_M4: $this->db->where("\x61\56\x69\144\137\153\145\154\x61\x73", $id_kelas); goto fgHfW; CiI3S: if (!($id_kelas != null)) { goto Qv3fs; } goto ZK_M4; EJbaG: $this->db->select("\52"); goto azhxJ; JdwTD: $this->db->where("\141\x2e\151\144\x5f\x74\160", $id_tp); goto UtWrN; bes2y: if (!($id_hari != null)) { goto OEOf6; } goto apE_O; oawGV: $this->db->join("\155\141\x73\164\x65\162\x5f\155\x61\x70\145\x6c\40\142", "\142\56\x69\144\x5f\155\x61\x70\x65\x6c\75\141\x2e\151\144\x5f\155\141\160\145\154", "\154\145\146\x74"); goto JdwTD; zADAs: return $query; goto KaPin; KaPin: } public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null) { goto d0QhC; avR7L: if ($id_kelas != null) { goto bi3Tl; } goto pUq0V; uwSYu: $this->db->where("\151\x64\137\153\145\x6c\x61\x73", $id_kelas); goto ACEAk; GE8LS: goto xi4zJ; goto O4BJU; gPK5I: $this->db->from("\x6b\145\154\141\163\137\152\x61\144\x77\141\x6c\137\x6b\x62\155"); goto EBwk6; dKkVC: return $query; goto aSlY2; lR4cY: xi4zJ: goto dKkVC; pUq0V: $query = $this->db->get()->result(); goto GE8LS; jURlY: $this->db->where("\x69\144\x5f\x73\155\164", $id_smt); goto avR7L; d0QhC: $this->db->select("\x2a"); goto gPK5I; EBwk6: $this->db->where("\x69\144\x5f\164\160", $id_tp); goto jURlY; ACEAk: $query = $this->db->get()->row(); goto lR4cY; O4BJU: bi3Tl: goto uwSYu; aSlY2: } }
