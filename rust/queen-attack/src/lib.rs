#[derive(Debug)]
pub struct ChessPosition {
    rank: i32,
    file: i32,
}

#[derive(Debug)]
pub struct Queen {
    position: ChessPosition,
}

impl ChessPosition {
    pub fn new(rank: i32, file: i32) -> Option<Self> {
        if !(0..8).contains(&rank) || !(0..8).contains(&file) {
            None
        } else {
            Some(Self { rank, file })
        }
    }
}

impl Queen {
    pub fn new(position: ChessPosition) -> Self {
        Self { position }
    }

    pub fn can_attack(&self, other: &Queen) -> bool {

        let rank_diff = self.position.rank.abs_diff(other.position.rank);
        let file_diff = self.position.file.abs_diff(other.position.file);

        // rank_diff == file_diff // it seemed to me that this is the only condition..
        self.position.rank == other.position.rank || self.position.file == other.position.file || rank_diff == file_diff
    }
}
