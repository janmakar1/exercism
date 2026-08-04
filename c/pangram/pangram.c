#include "pangram.h"

#include<stdio.h>
#include<string.h>
#include<ctype.h>

int char_to_index(char c) {
  return c - 'a';
}

bool is_pangram(const char *sentence) {
  if (sentence == NULL) {
    return false;
  }

  int len = strlen(sentence);
  if (len == 0) {
    return false;
  }

  int occurences[26] = { 0, };

  for(int index = 0; index < len; index++) {
    int character = sentence[index];
    if (character == '_' || character == ' ') {
      continue;
    }
    if (isdigit(character)) {
      continue;
    }
    if (isupper(character)) {
      character = tolower(character);
    }
    occurences[char_to_index(character)]++;

  }

  for(int i = char_to_index('a'); i < char_to_index('z'); i++) {
    if (occurences[i] == 0) {
      return false;
    }
  }
  return true;
}
